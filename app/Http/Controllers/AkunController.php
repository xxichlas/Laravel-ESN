<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return  auth()->user()->getAllPermissions();   

        $akun= DB::table('akun')
                ->join('peserta', 'akun.noPeserta', '=', 'peserta.noPeserta')
                ->select('akun.*', "peserta.*")
                ->get();
        return view('akun/index', compact('akun'));
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
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        //
        
        $akun= DB::table('akun')
        ->join('peserta', 'akun.noPeserta', '=', 'peserta.noPeserta')
        ->where('akun.noPeserta', $akun->noPeserta)
        // ->select('akun.*', "peserta.*")
        ->first();
        
        // dd($akun);
        return view('akun/ubah', compact('akun'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akun $akun)
    {
        //
        Akun::where('noPeserta', $akun->noPeserta)
        ->update([
           
            'username'=> $request ->username,
            'password'=> $request ->password,
        ]);
        return redirect('/akun')-> with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun $akun)
    {
        //
        Akun::destroy($akun ->noPeserta);
        return redirect('/akun')-> with('status', 'Data berhasil dihapuskan!');
    }
}
