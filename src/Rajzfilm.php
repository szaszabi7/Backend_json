<?php

namespace Petrik\Rajzfilmek;

use Illuminate\Database\Eloquent\Model;

class Rajzfilm extends Model{
    protected $table = 'rajzfilmek';
    public $timestamps = false;

   //protected $fillable = ['cim', 'hossz', 'kiadasi_ev'];
    protected $guarded = ['id'];
}
