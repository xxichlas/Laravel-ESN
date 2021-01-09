<?php

namespace App\Http\Controllers;

use App\Models\HasilSaintek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSaintekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $hasilsaintek = DB::table('hasil')
                    ->join('peserta', 'hasil.noPeserta', '=', 'peserta.noPeserta')
                    ->where('peserta.pilihanTryout', '=', 'Saintek')
                    ->distinct()
                    ->get();
        return view('hasilsaintek/index', compact('hasilsaintek'));
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
     * @param  \App\Models\HasilSaintek  $hasilSaintek
     * @return \Illuminate\Http\Response
     */
    public function show(HasilSaintek $hasilSaintek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilSaintek  $hasilSaintek
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilSaintek $hasilSaintek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasilSaintek  $hasilSaintek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasilSaintek $hasilSaintek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilSaintek  $hasilSaintek
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilSaintek $hasilSaintek)
    {
        //
    }
}
