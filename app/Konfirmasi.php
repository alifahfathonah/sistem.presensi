<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Konfirmasi extends Model
{
    protected $table = 'rekap_konfirmasi';
    protected $guarded = [];

    public function posting(){
    	return $this->belongsTo('Post');
    }
}
