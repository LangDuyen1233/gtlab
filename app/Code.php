<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected  $table='code';

    public function project_code(){
        return $this->belongsTo( 'App\Project','id_pro','id');
    }
}
