<?php

namespace App\Http\Controllers\admin;

use App\Models\Actions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionsController extends Controller
{
    private $actions;
    private $data = [];
    public function __construct()
    {
        $this->actions = new Actions();
    }

    public function index(){
        $actions = $this->actions->getAll();
        $this->data['actions'] = $actions;
        return view('admin.actions.index',$this->data);
    }

}
