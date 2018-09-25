<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    public function order(){
    	return $this->hasOne('App\Order','item_id', 'id');
    }
    public function items($item_code){
    	return Item::where('itemcode', $item_code)->first();
    }
}
