<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class treecollection extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'treecollection';
    protected $infomation=['Clan','creator','password'];
}
