<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    protected $fillable = ['title','description','image','genre_id'];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}