<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Presensi;
use App\Posting;
use PDF;

class presensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Posting::orderBy('id', 'DESC')->get()->count();
        $sesi = Posting::orderBy('id', 'DESC')->get();
        $data = DB::table('presensi')
                    ->JOIN('users', 'presensi.user_id', '=', 'users.id')
                    ->JOIN('post', 'presensi.sesi_id', '=', 'post.id')
                    ->SELECT('presensi.created_at', 'users.name', 'users.kode_user')
                    ->where('post.id', '=', $id)->orderBy('presensi.created_at', 'ASC')->get();
        //$jml = Presensi::get()->where('id','')->count();

        return view('pages.back.data-presensi', ['data'=>$data, 'id'=>$id, 'sesi'=>$sesi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $req){
        if (!\Auth::attempt([
            'no_tlp' => $req['no_tlp'],
            'password' => $req['password']
        ])) {
            return redirect('/presensi');
        }
        $id = Posting::get()->count();
        return redirect('/scan');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $sesi = Crypt::decryptString($request['sesi_id']);
        $kd = \Auth::user()->kode_user;
        $tanda = $kd + $sesi;
        //dd($sesi);
        $data = Presensi::create([
            'user_id' => $request['user_id'],
            'sesi_id' => $sesi,
            'tanda' => $tanda,
        ]);
        //dd($data);
        return redirect('/presensi/logout');
        //return "Berhasil store";
    }

    public function presensi(){
        $id = Posting::get()->count(); 
        $data = Posting::find($id);
        //dd($data);
        return view('pages.front.presensi', ['data'=>$data]);
    }

    public function logout(){
        \Auth::logout();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $id = $req['sesi'];
        $data = DB::table('presensi')
                    ->JOIN('users', 'presensi.user_id', '=', 'users.id')
                    ->JOIN('post', 'presensi.sesi_id', '=', 'post.id')
                    ->SELECT('presensi.created_at', 'users.*', 'post.*')
                    ->where('post.id', '=', $id)->orderBy('presensi.created_at', 'ASC')->get();

        return view('pages.back.data-presensi', ['id'=>$id, 'data'=>$data]);
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

    public function presensikajian(){   
        $id = Posting::get('id')->count();     
        $data = DB::table('presensi')
                    ->JOIN('users', 'presensi.user_id', '=', 'users.id')
                    ->JOIN('post', 'presensi.sesi_id', '=', 'post.id')
                    ->SELECT('presensi.created_at', 'users.name', 'users.kode_user')
                    ->WHERE('post.id', '=', $id)->get();

        return view('pages.back.presensi-kajian', ['data' => $data]);
    }

    public function qrcodegenerator(){
        $id = Posting::get('id')->count();
        $encrypted = Crypt::encryptString($id);
        //dd($encrypted);
        $qr = QrCode::size(350)->generate($encrypted);

        return view('pages.back.qrcode-presensi', ['qr'=>$qr, 'encrypted'=>$encrypted]);
    }
}
