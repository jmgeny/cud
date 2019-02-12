<?php

namespace cud;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function trabajo() {
    	return $this->belongsTo(Trabajo::class);
    }

    public function obrasocial(){
    	return $this->belongsTo(Obrasocial::class);
    }

    public function discapacidad() {
    	return $this->belongsTo(Disca::class);
    }

    public function estudio() {
    	return $this->belongsTo(Estudio::class);
    }

    public function visits() {
        return $this->hasMany(Visit::class);
    }

}
