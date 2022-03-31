<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cart extends Controller
{
    // public function __construct($oldCart) {
    //     if($oldCart) {
    //         $this->items = $oldCart->items;
    //         $this->totalQty = $oldCart->totalQty;
    //         $this->totalPrice = $oldCart->totalPrice;
    //     }
    // }

    // public function add($item, $id){
    //     //dd($this->items);
    //     $storedItem = ['qty'=>0, 'price'=>$item->sell_price, 'item'=> $item];
    //     if ($this->items){
    //         if (array_key_exists($id, $this->items)){
    //             $storedItem = $this->items[$id];
    //         }
    //     }
    //    //$storedItem['qty'] += $item->qty;
    //     $storedItem['qty']++;
    //     $storedItem['price'] = $item->sell_price * $storedItem['qty'];
    //     $this->items[$id] = $storedItem;
    //     $this->totalQty++;
    //     $this->totalPrice += $item->sell_price;
    // }

    
}
