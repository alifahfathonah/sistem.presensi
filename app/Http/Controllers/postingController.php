<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use App\Posting;

class postingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posting::orderBy('id', 'DESC')->get();
        return view('pages.back.kabar-kajian', ['data' => $data]);
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
        $file= $request->file('poster')->store('posters');
        //dd($file);
        $data = Posting::create([
            'sesi' => $request['sesi'],
            'gambar' => $file
        ]);
        //dd($data);
        return redirect('/posting')->withToastSuccess('Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Posting::find($id);

        return view('pages.back.edit-kabar-kajian', ['data'=>$data]);
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
        $data = Posting::find($id);
        $file= $request->file('poster')->store('posters');
        if ($file == '') 
            $data->update($request->all());

        $data->update([
            'sesi' => $request['sesi'],
            'gambar' => $file,
        ]);

        return redirect('/posting')->withToastSuccess('Data Berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Posting::find($id);
        $data->delete();
        return redirect('/posting')->withToastSuccess('Data Berhasil dihapus');
    }
}
