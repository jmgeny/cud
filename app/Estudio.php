<?php

namespace cud;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
	public function person() {
		return $this->hasMany(Person::class);
	}
}
