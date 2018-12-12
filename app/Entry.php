<?php

namespace sysventas;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function articles() {

    	return $this->belongsToMany(Article::class);
    	
    }

    public function person() {
    	$this->belongsTo(Person::class);
    }
}

