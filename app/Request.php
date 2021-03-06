<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table='requests';
    public $timestamps=false;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
