<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParameterList extends Model
{
    public function inform()
    {
    	return $this->belongsTo('Inform');
    }
}
