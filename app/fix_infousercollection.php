<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class fix_infousercollection extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'fix_infousercollection';
    protected $infomation=['hisfix','userfix','infofix'];
}
