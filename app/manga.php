<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manga extends Model
{

    protected $fillable = array('title','description','shortTitle');

}
