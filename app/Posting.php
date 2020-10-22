<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Konfirmasi;

class Posting extends Model
{
    protected $table = 'post';
    protected $guarded = [];

    public function konfirm(){
    	return $this->hasOne('Konfirmasi', 'konfirmasi_id');
    }
}
