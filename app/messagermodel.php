<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class messagermodel extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'messager';
    protected $infomation=['sender','ID_sender','contant','receiver','ID_receiver','Status_read','Status_check'];
}
