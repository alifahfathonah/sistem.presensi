<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Peserta;

class Konfirmasi extends Model
{
    protected $table = 'rekap_konfirmasi';
    protected $guarded = [];

    public function posting(){
    	return $this->belongsTo('Posting');
    }

    public function peserta(){
    	return $this->belongsTo('Peserta');
    }
}
