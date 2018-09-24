<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
     public function item($item_code){
    	return Item::where('itemcode', $item_code)->first();
    }
}
