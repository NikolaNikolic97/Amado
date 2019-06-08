<?php

namespace App\Http\Controllers\admin;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnaliticsController extends Controller
{
    private $data;
    public function admin(){
        $posts = new Posts();
        $total = $posts->totalEarnings();
        $itemsSold = $posts->itemsSold();
        $this->data['total'] = $total;
        $this->data['items'] = $itemsSold;
        //dd($this->data);
        return view('admin.analitics.analitics',$this->data);
    }

}
