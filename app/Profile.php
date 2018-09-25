<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	
	protected $fillable = [
        'address', 'email', 'religion','mobileno','interests','occupation','about','site','image'
    ];
    public function user(){
    	return $this->belongsTo('App\User', 'id', 'staffid');
    }
}
