<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [ # 書き換え可能
        "author_id", "title", "price"
    ];

    public function author(){
        return $this->belongsTo("App\Author");
    }
}
