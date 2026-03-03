<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['login', 'password', 'name', 'city_id', 'position_id'];
    protected $hidden = ['password'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
