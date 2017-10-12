<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tome extends Model
{
    protected $fillable = array('manga_id', 'chapter');

    public function manga()
    {
        return $this->belongsTo('App\manga');
    }
}
