<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class treeaccesscollection extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'treeaccesscollection';
    protected $infomation=['clan','access_user'];
}
