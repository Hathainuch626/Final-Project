<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class treeaccesscollection extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'treeaccesscollection';
    protected $infomation=['clan','access_user','status'];
}
