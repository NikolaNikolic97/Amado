<?php

namespace App\Http\Controllers;

use App\Models\Actions;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Menu;
use App\Models\Posts;
use App\Models\Role;
use App\Models\Users;
use DateTime;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $users;
    private $role;
    private $menu;
    private $brands;
    private $categories;
    private $posts;
    private $img;
    private $actions;
    public function __construct()
    {
        $this->users = new Users();
        $this->role = new Role();
        $this->menu = new Menu();
        $this->brands = new Brands();
        $this->categories = new Categories();
        $this->posts = new Posts();
        $this->img=new Images();
        $this->actions = new Actions();
    }

    public function getAllUsers(){
        return $this->users->getAll();
    }
    public function getAllMenus(){
        return $this->menu->getMenu();
    }
    public function getAllBrands(){
        return $this->brands->getAll();
    }
    public function getAllCategories(){
        return $this->categories->getAll();
    }
    public function getAllPosts(){
        return $this->posts->getAll();
    }
    public function getAllImages(){
        return $this->img->getAll();
    }
    public function filtering(Request $request){
        $category = $request->input('category');
        $brands = $request->input('brands');
        $sort = $request->input('sort');
        $price = $request->input('price');
        $search = $request->input('search');
        $page = $request->input('page');
        return $this->posts->filtering($category,$brands,$sort,$price,$search,$page);

    }

    public function fileteringDate(Request $request){
        $startDate = $request->input('start');
        $endDate = $request->input('end');
        $timeStart = DateTime::createFromFormat("Y-m-d", $startDate);
        $timestampStart = $timeStart->getTimestamp();
        $timeEnd = DateTime::createFromFormat("Y-m-d", $endDate);
        $timestampEnd = $timeEnd->getTimestamp();
        return $this->actions->filtering($timestampStart,$timestampEnd);
    }
}
