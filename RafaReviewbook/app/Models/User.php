<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // jika perlu auth, gunakan Authenticatable
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
    ];

    // One to One
    public function profile() {
    return $this->hasOne(Profile::class);
}

public function comments() {
    return $this->hasMany(Comment::class);
}
}