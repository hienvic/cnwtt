<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
	const UPDATED_AT = null;
    protected $table = "password_resets";
    protected $fillable = ['email','token'];


    public function user(){
    	return $this->belongsTo('App\User','email','email');
    }
}
