<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
     public function items($item_code){
    	return Inventory::where('itemcode', $item_code)->first();
    }
}
