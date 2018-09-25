<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
   public function inventory(){
   	return $this->belongsTo('App\Inventory', 'itemcode','item_code');
   }
}
