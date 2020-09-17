<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class treecollection extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'treecollection';
    protected $infomation=['Clan','creator','password'];
}
