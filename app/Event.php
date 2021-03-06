<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';
    public $timestamps=false;

    public function court(){
        return $this->belongsTo('App\Court','court_id');
    }

    public function sport(){
        return $this->belongsTo('App\Sport','sport_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','event_id');
    }

    public function attends(){
        return $this->belongsToMany('App\User','attends','event_id','user_id');
    }
}
