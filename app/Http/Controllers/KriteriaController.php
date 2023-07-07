<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kriteria')->with([
            'kriteria' => Kriteria::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("tambahkriteria");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([

        ]);

        $kriteria = new Kriteria;
        $kriteria->kode = $request->kode;
        $kriteria->nama = $request->nama;
        $kriteria->bobot = $request->bobot;
        // $kriteria->bobot = $request->sertifikat;
      

        $kriteria->save();

        return to_route('kriteria.index')->with("data berhasil disimpan");
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
        return view('kriteriaedit')->with([
            'kriteria' => Kriteria::find($id),
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

        $kriteria = kriteria::find($id);
        $kriteria->kode = $request->kode;
        $kriteria->nama = $request->nama;
        $kriteria->bobot = $request->bobot;
        // $kriteria->kriteria_jumlah_sertifikat = $request->sertifikat;
        // $kriteria->kriteria_jumlah_project = $request->project;
      

        $kriteria->save();

        return to_route('kriteria.index')->with("data berhasil disimpan");
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
        $kriteria = kriteria::where('id',$id);
        $kriteria->delete();
        return redirect()->route('kriteria.index')->with(['message'=> 'Successfully deleted!!']); 
    }
}
