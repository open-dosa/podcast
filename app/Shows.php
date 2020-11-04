<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shows extends Content
{
    //

    public function episodes()
    {
        return $this->hasMany('App\Episode', 'parent_id');
    }    
}
