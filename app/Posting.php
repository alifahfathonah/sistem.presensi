<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Peserta;

class Posting extends Model
{
    protected $table = 'post';
    protected $guarded = [];

    public function peserta(){
    	return $this->belongsToMany('Peserta');
    }
}
