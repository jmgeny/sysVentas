<?php

namespace sysventas;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function articles() {

    	return $this->belongsToMany(Article::class);
    }
}
