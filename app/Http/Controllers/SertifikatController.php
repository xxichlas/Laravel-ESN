<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sertifikat = DB::table('sertifikat')
        ->join('peserta', 'sertifikat.noPeserta', '=', 'peserta.noPeserta')
        ->join('hasil', 'sertifikat.noPeserta', '=', 'hasil.noPeserta')
        ->distinct()
        ->get();
    return view('sertifikat/index', compact('sertifikat'));

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
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
        $sertifikat = DB::table('sertifikat')
        ->join('peserta', 'sertifikat.noPeserta', '=', 'peserta.noPeserta')
        ->join('hasil', 'sertifikat.noPeserta', '=', 'hasil.noPeserta')
        ->where('sertifikat.noPeserta', $sertifikat->noPeserta)
        ->distinct()
        ->first();
        return view('sertifikat/ubah', compact('sertifikat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
        Sertifikat::where('noPeserta', $sertifikat->noPeserta)
        ->update([
           
            'nomorSertifikat'=> $request ->nomorSertifikat,
            'fileSertifikat'=> $request ->fileSertifikat,
        ]);
        return redirect('/sertifikat')-> with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
    }
}
