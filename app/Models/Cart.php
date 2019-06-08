<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 15.3.2019.
 * Time: 09.34
 */

namespace App\Models;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item,$id){
        $storedItem = ['qty'=> 0 ,'price'=>'0','item'=>$item];
        if($this->items){
            if (array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalPrice += $item->price;
        $this->totalQty++;
    }
    public function delete($id){
        $this->totalPrice -=$this->items[$id]['price'];
        $this->totalQty -= $this->items[$id]['qty'];
        unset($this->items[$id]);

    }

}