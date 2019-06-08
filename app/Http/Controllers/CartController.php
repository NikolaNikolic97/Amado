<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Images;
use App\Models\Posts;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends BaseController
{
    private $img;
    private $post;
    private $idProduct = [];
    public function __construct()
    {
        parent::__construct();
        $this->img = new Images();
        $this->post = new Posts();
    }

    public function getAddToCart(Request $request,$id){
        $product = $this->post->getPost($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);

        $request->session()->put('cart',$cart);
        return redirect('/shop')->with('msg','You have added item do cart');
    }

    public function cart(){
        if (!Session::has('cart')){
            return view('pages.cart',['menu'=>$this->data['menu']]);
        }
        $oldCard = Session::get('cart');
        $cart = new Cart($oldCard);
        $pictures = $this->img->getAll();

        return view('pages.cart',['menu'=>$this->data['menu'],'products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'images'=>$pictures]);
    }
    public function deleteFromCart($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($id);

        Session::put('cart',$cart);
        return redirect('/cart')->with('msg','Item removed from cart');

    }

    public function checkout(Request $request){
        $post_ids = $request->input('id');
        $id_user = $request->input('id_user');
        $quantity = $request->input('quantity');
        $checkout = new Checkout();
        $checkout->posts_ids = $post_ids;
        $checkout->user_id = $id_user;
        $checkout->quantity = $quantity;
        try{
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart=new Cart($oldCart);
            foreach ($post_ids as $id){
                $cart->delete($id);
            }
            Session::put('cart',$cart);
            $checkout->insertCheckout();

        }catch (QueryException $e){
            \Log::info($e->getMessage());
        }


    }


}
