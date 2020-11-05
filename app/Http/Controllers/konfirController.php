<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Konfirmasi;
use App\Posting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class konfirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sesi = Posting::orderBy('id', 'DESC')->get();
        $id = Posting::orderBy('id', 'DESC')->get()->count();
        $data = DB::table('rekap_konfirmasi')
                    ->JOIN('users', 'rekap_konfirmasi.user_id', '=', 'users.id')
                    ->JOIN('post', 'rekap_konfirmasi.konfirmasi_id', '=', 'post.id')
                    ->SELECT('rekap_konfirmasi.*', 'users.*', 'post.*')
                    ->WHERE('post.id', '=', $id)->get();
        $sum = Konfirmasi::where('konfirmasi_id', $id)->sum('jml');
        //dd($sum);
        return view('pages.back.data-konfirmasi', ['data'=>$data, 'sesi'=>$sesi, 'id'=>$id, 'sum'=>$sum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if (!\Auth::attempt([
            'no_tlp' => $request['no_tlp'],
            'password' => $request['password']
        ])) {
            return redirect('/');
        }
        $id = Posting::get('id')->count();
        $jml = $request['pasangan'] + $request['anak'] + 1;
        $user = \Auth::user()->id;

        if ($id==$id && $user==$user) {
            echo "error";
        }
        $data = Konfirmasi::create([
            'jml' => $jml,
            'konfirmasi_id' => $id,
            'user_id' => $user
        ]);
        //dd($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request['sesi'];
        $sesi = Posting::orderBy('id', 'DESC')->get();
        $data = DB::table('rekap_konfirmasi')
                    ->JOIN('users', 'rekap_konfirmasi.user_id', '=', 'users.id')
                    ->JOIN('post', 'rekap_konfirmasi.konfirmasi_id', '=', 'post.id')
                    ->SELECT('rekap_konfirmasi.*', 'users.*', 'post.*')
                    ->WHERE('post.id', '=', $id)->get();
        return view('pages.back.data-konfirmasi', ['data'=>$data, 'sesi'=>$sesi, 'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
