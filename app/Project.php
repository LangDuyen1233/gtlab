<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table='project';

    public function type(){
        return $this->belongsTo( 'App\Project_type','id_type','id');
    }

    public function code_pro(){
        return $this->hasMany(
            'App\Code','id_pro','id');
    }

    public function team(){
        return $this->belongsTo( 'App\Teamwork','id_pro','id');
    }

}
