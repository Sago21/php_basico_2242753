<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    protected $table ="album";
    protected $primaryKey ="AlbumId";
    public $timestamps = false;
// ESTABLECE LA RELACION

    PUBLIC function Bailables (){
// HASMANY: parametros 
// 1. modelo o relacionar 
//2. FK del artista (papa)
return $this->hasMany('App\Bailables','ArtistId');
    }
}
