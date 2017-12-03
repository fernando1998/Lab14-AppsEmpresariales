<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";


    protected $hidden = ["created_at","updated_at"];

    public function categoria(){

        // 1 producto pertenece a un categoria.
    return $this->belongsTo("App\Category");
    }

}
