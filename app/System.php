<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{

    protected $fillable = [
        'name', 'description',
    ];

    public function modules(){
    	return $this->belongsToMany('App\Module', 'systems_modules');
    }
}
