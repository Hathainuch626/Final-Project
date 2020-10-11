<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class relationmodel extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'inforelation';
    protected $inforelationship = ['my','parent','relation'];

}