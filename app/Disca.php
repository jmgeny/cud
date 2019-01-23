<?php

namespace cud;

use Illuminate\Database\Eloquent\Model;

class Disca extends Model
{
	public function person() {
		return $this->hasMany(Person::class);
	}
}
