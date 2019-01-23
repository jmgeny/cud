<?php

namespace cud;

use Illuminate\Database\Eloquent\Model;

class Obrasocial extends Model
{
	public function person() {
		return $this->hasMany(Person::class);
	}
}
