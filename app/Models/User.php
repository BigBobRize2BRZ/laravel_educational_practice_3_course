<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'age', 'salary'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

     public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
