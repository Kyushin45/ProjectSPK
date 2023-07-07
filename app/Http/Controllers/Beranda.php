<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class Beranda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard')->with([
            'calon' => calon::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

        ]);

        $calon = new calon;
        $calon->nama = $request->nama;
        $calon->alamat = $request->alamat;
        $calon->tanggal_lahir = $request->tanggal_lahir;
        $calon->nomor_hp = $request->nomor_hp;
        $calon->email = $request->email;
        $calon->linkedin = $request->linkedin;
        $calon->ipk = $request->ipk;
        $calon->pengalaman_kerja = $request->pengalaman_kerja;
        $calon->jumlah_bahasa = $request->jumlah_bahasa;
        $calon->jumlah_sertifikat = $request->jumlah_sertifikat;
        $calon->jumlah_project = $request->jumlah_project;

        $calon->save();

        return to_route('beranda.index')->with("data berhasil disimpan");
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
        //
        return view('admin.edit')->with([
            'calon' => calon::find($id),
        ]);
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
        $request->validate([

        ]);

        $calon = calon::find($id);
        // $calon = calon::where('id',$id);
        $calon->nama = $request->nama;
        $calon->alamat = $request->alamat;
        $calon->tanggal_lahir = $request->tanggal_lahir;
        $calon->nomor_hp = $request->nomor_hp;
        $calon->email = $request->email;
        $calon->linkedin = $request->linkedin;
        $calon->ipk = $request->ipk;
        $calon->pengalaman_kerja = $request->pengalaman_kerja;
        $calon->jumlah_bahasa = $request->jumlah_bahasa;
        $calon->jumlah_sertifikat = $request->jumlah_sertifikat;
        $calon->jumlah_project = $request->jumlah_project;

        $calon->save();

        return to_route('beranda.index')->with("success","data telah diubah");
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
        $calon = calon::where('id',$id);
        $calon->delete();
        return redirect()->route('beranda.index')->with(['message'=> 'Successfully deleted!!']); 
    }

}
