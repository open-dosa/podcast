<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Content 
{
    //

    /**
     * Get the post that owns the comment.
     */
    public function show()
    {
        return $this->belongsTo('App\Show', 'parent_id' );
    }    
}
