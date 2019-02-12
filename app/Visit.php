<?php

namespace cud;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public function person(){
    	return $this->belongsTo(Person::class);
    }
}
