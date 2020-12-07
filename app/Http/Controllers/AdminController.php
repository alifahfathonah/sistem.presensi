<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posting;
use App\Konfirmasi;
use App\Peserta;
use attempt;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function regindex(){
        return view('auth.reg-admin');
    }

    public function postreg(Request $req){
        $data = Peserta::create([
            'name' => $req["name"],
            'no_tlp' => $req["no_tlp"],
            'password' => bcrypt($req["password"]),
            'role' => 'admin',
        ]);
        //dd($data);
        return redirect('/login-admin')->with('success', 'Pendaftaran Berhasil');
    }

    public function logindex(){
        return view('auth.login-admin');
    }

    public function postlogin(Request $req){
        if (!\Auth::attempt(['no_tlp' => $req["no_tlp"], 'password' => $req["password"]])) {
            return redirect('/login-admin');
        }

        return redirect('/administrator');
    }

    public function profile($id){
        $data = Peserta::find($id);
        return view('pages.back.admin-profile', ['data'=>$data]);
    }

    public function updateprofile(Request $req, $id){
        $data = Peserta::find($id);
        $data->update([
            'name'=>$req['name'],
            'no_tlp'=>$req['no_tlp'],
            'alamat'=>$req['alamat'],
        ]);

        return redirect()->back()->with('success', 'Data Berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Peserta::find($id);
        $data->delete();
        return redirect('/logout')->with('success', 'Data dihapus<br> Terimakasih atas bantuannya');
    }

    public function logout(){
        \Auth::logout();
        return redirect('/login-admin');
    }

    public function index(){
        $data = Peserta::where('role', 'admin')->get();
        return view('pages.back.data-admin', ['data'=>$data]);
    }
}
