<?php

namespace sysventas;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	public function entries() {
		$this->hasMany(Entry::class);
	}
}
