<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $data=[];
    public function __construct(){
        $menus = new Menu();
        $menu = $menus->getMenu();
        $this->data["menu"] = $menu;
    }
}
