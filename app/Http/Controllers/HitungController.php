<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');
        $bobotKriteriaC1 = DB::table('kriteria')->where('kode' ,'C1')->value('bobot');
        $bobotKriteriaC2 = DB::table('kriteria')->where('kode' ,'C2')->value('bobot');
        $bobotKriteriaC3 = DB::table('kriteria')->where('kode' ,'C3')->value('bobot');
        $bobotKriteriaC4 = DB::table('kriteria')->where('kode' ,'C4')->value('bobot');
        $bobotKriteriaC5 = DB::table('kriteria')->where('kode' ,'C5')->value('bobot');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $produk = Calon::get();
        $data = Calon::orderby('nama', 'asc')->get();

        $minC1 = Calon::min('ipk');
        $maxC1 = Calon::max('ipk');
        $minC2 = Calon::min('pengalaman_kerja');
        $maxC2 = Calon::max('pengalaman_kerja');
        $minC3 = Calon::min('jumlah_bahasa');
        $maxC3 = Calon::max('jumlah_bahasa');
        $minC4 = Calon::min('jumlah_sertifikat');
        $maxC4 = Calon::max('jumlah_sertifikat');
        $minC5 = Calon::min('jumlah_project');
        $maxC5 = Calon::max('jumlah_project');

        $C1min =[
            'calons' => $minC1,
        ];
        $C1max =[
            'calons' => $maxC1,
        ];
        $C2min =[
            'calons' => $minC2,
        ];
        $C2max =[
            'calons' => $maxC2,
        ];
        $C3min =[
            'calons' => $minC3,
        ];
        $C3max =[
            'calons' => $maxC3,
        ];
        $C4min =[
            'calons' => $minC4,
        ];
        $C4max =[
            'calons' => $maxC4,
        ];
        $C5min =[
            'calons' => $minC5,
        ];
        $C5max =[
            'calons' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'calons' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }
}
