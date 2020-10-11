<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class InfoUser extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'infouser';
    protected $infomation=['clan','Firstname', 'Lastname', 'Birthdate','Sex','Email','Password','Status','Address','Job','Tel','Province','postalcode','Addresslive',
    'province2','postaddrtrue','facebook','creator'];
}
