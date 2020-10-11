<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class login extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'testuser';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Firstname', 'Lastname', 'Birddate','Sex','Email','Password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}
