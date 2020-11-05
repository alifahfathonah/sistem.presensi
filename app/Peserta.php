<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Posting;

class Peserta extends Model
{
    protected $table = 'users';
    protected $guarded = [];

    public static function getId(){
    	return $getId = Peserta::orderBy('id', 'DESC')->get('id');
    }


    //public function find_by_id($id){
    //	$peserta = DB::table('users')->where('id', $id)->first();
    //	return $peserta;
    //}

    public function konfirm(){
    	return $this->belongsToMany('Posting');
    }
}
