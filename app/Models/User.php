<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'email',
        'name',
        'avatar',
        'password',
        'phone',
        'city',
        'bio'
    ];

    public function company()
    {
        return $this ->belongsTo(Company::class);
    }
    public function getRoleNameAttribute()
    {
        return UserRoleEnum::getKeys($this->role)[0];
    }
    public function getGenderNameAttribute()
    {
        if ($this->gender===0)
        {
            return "Female";
        }
        return "Male";

    }
    public function posts()
    {

        return $this->belongsToMany(Post::class,'reports','user_id', 'reported_id')->withPivot('status');

    }


}
