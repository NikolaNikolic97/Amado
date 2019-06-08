<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\InsertPostValidation;
use App\Http\Requests\UpdatePostValidation;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Posts;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    private $posts;
    private $category;
    private $brand;
    private $img;
    private $data = [];
    public function __construct()
    {
        $this->posts= new Posts();
        $this->category=new Categories();
        $this->brand=new Brands();
        $this->img = new Images();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->posts->getAll();
        $this->data['posts'] =  $posts;
        $this->data['img']=$this->img->getAll();
       // dd($this->data);
        return view('admin.posts.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['brand'] = $this->brand->getAll();
        $this->data['category'] = $this->category->getAll();
        return view('admin.posts.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertPostValidation $request)
    {
        $desc = $request->input('description');
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $brand = $request->input('brand');
        $category = $request->input('category');
        //rad sa fajlom
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $fileName = time().'_'.$fileName;
        try{
            $file->move(public_path('img\product-img'),$fileName);
            $this->posts->fileName = $fileName;
            $this->posts->desc = $desc;
            $this->posts->name = $name;
            $this->posts->price = $price;
            $this->posts->category = $category;
            $this->posts->brand = $brand;
            $this->posts->quantity = $quantity;
            $this->posts->imgPath = asset('img/product-img');
            $this->posts->insertPost();
            return redirect('/admin/posts')->with('msg','Successfull insert');
        }
        catch (\Exception $e){
            \Log::info('Error '.$e->getMessage());

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['posts'] = $this->posts->getPost($id);
        $this->data['category'] = $this->category->getAll();
        $this->data['brand'] = $this->brand->getAll();
        return view('admin.posts.edit',$this->data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostValidation $request, $id)
    {
        $desc = $request->input('description');
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $brand = $request->input('brand');
        $category = $request->input('category');
        try{
            $this->posts->desc = $desc;
            $this->posts->name = $name;
            $this->posts->price = $price;
            $this->posts->category = $category;
            $this->posts->brand = $brand;
            $this->posts->quantity = $quantity;
            $this->posts->updatePost($id);
            return redirect('/admin/posts')->with('msg','Successfull update');
        }
        catch (\Exception $e){
            \Log::info('Error '.$e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->posts->deletePost($id);
        }
        catch (QueryException $e){
            \Log::critical('Error '.$e->getMessage());
        }
    }
}
