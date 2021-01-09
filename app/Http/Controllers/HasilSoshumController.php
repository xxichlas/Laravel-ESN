<?php

namespace App\Http\Controllers;

use App\Models\HasilSoshum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSoshumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hasilsoshum = DB::table('hasil')
                    ->join('peserta', 'hasil.noPeserta', '=', 'peserta.noPeserta')
                    ->where('peserta.pilihanTryout', '=', 'Soshum')
                    ->distinct()
                    ->get();
        return view('hasilsoshum/index', compact('hasilsoshum'));
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
     * @param  \App\Models\HasilSoshum  $hasilSoshum
     * @return \Illuminate\Http\Response
     */
    public function show(HasilSoshum $hasilSoshum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilSoshum  $hasilSoshum
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilSoshum $hasilSoshum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasilSoshum  $hasilSoshum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasilSoshum $hasilSoshum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilSoshum  $hasilSoshum
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilSoshum $hasilSoshum)
    {
        //
    }
}
