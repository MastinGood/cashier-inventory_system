<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function inventory(){
   	return $this->belongsTo('App\Inventory', 'itemcode','item_code');
   }
}
