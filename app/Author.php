<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [ # 書き換え可能
        "name"
    ];

    public function books(){
        return $this->hasMany("App\Book");
    }
}
