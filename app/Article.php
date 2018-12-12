<?php

namespace sysventas;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function entries() {
    	return $this->belongsToMany(Entry::class);
    }

    public function sales() {
    	return $this->belongsToMany(Sale::class);
    }

}
