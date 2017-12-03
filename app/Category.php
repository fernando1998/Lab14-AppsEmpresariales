<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categories";


    protected $hidden = ["created_at", "updated_at"];

    public function producto()
    {
        // 1 producto pertenece a un categoria.
        return $this->hasMany("App\Product");
    }
}