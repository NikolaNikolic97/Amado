<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Posts;
use Illuminate\Http\Request;

class FrontEndController extends BaseController
{
    private $brands;
    private $category;
    private $posts;
    private $img;
    public function __construct()
    {
        parent::__construct();
        $this->brands = new Brands();
        $this->category= new Categories();
        $this->posts=new Posts();
        $this->img= new Images();
    }

    public function index(){
        $this->data['images'] = $this->img->getAll();
        $this->data['posts'] = $this->posts->getLastTwelvePosts();
        return view('pages.index',$this->data);
    }

    public function posts($id){
        $this->data['posts'] = $this->posts->getPost($id);
        $this->data['images'] = $this->img->getSpecImgForPost($id);
        return view('pages.post_details',$this->data);
    }

    public function shop(){
        $this->data['brands'] = $this->brands->getAll();
        $this->data['categories']=$this->category->getAll();
        $this->data['posts'] = $this->posts->getAllPosts();
        $this->data['images'] = $this->img->getAll();
        return view('pages.shop',$this->data);
    }
    public function post(){
        return view('pages.post_details',$this->data);
    }
    public function login(){
        return view('pages.login',$this->data);
    }
    public function contactUs(){
        return view('pages.contactUs',$this->data);
    }
    public function author(){
        return view('pages.author',$this->data);
    }

}
