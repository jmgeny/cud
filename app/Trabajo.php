<?php

namespace cud;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
	public function person() {
		return $this->hasMany(Person::class);
	}
}
