<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posting;
use App\Konfirmasi;
use App\Peserta;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function administrator()
    {
    	//Peserta
    	$sum2 = Peserta::all()->count();

    	//Poster
    	$data = Posting::take(1)->orderBy('id', 'DESC')->get();

    	//Konfirmasi
    	$id = Posting::orderBy('id', 'DESC')->get()->count();
    	$data2 = DB::table('rekap_konfirmasi')
                    ->JOIN('users', 'rekap_konfirmasi.user_id', '=', 'users.id')
                    ->JOIN('post', 'rekap_konfirmasi.konfirmasi_id', '=', 'post.id')
                    ->SELECT('rekap_konfirmasi.*', 'users.*', 'post.*')
                    ->WHERE('post.id', '=', $id)->take(8)->orderBy('rekap_konfirmasi.id', 'DESC')->get();
        $sum = Konfirmasi::where('konfirmasi_id', $id)->sum('jml');
        
        return view('pages.back.home', ['sum'=>$sum, 'sum2'=>$sum2, 'data'=>$data, 'data2'=>$data2]);
    }
}
