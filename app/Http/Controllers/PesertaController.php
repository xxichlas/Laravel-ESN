<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    
         //
       // $role = Role::findById(3);
        //$permission = Permission::findById(3);
       // $role->givePermissionTo($permission);
       // auth()->user()->assignRole('tryout');
        //return  auth()->user()->getAllPermissions();        
        // return User::role('kestari')->get();
        $peserta = Peserta::all();
        return view('peserta/index', compact('peserta'));

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
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
        return view('peserta/ubah', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //

        // $request ->validate([
        //     'nama' => 'required',
        //     'asalSekolah'=> 'required',
        //     'pilihanTryout'=> 'required',
        //     'email'=> 'required',
        //     'konfrimasiPembayaran'=> 'required'
        // ]);


        Peserta::where('noPeserta', $peserta->noPeserta)
            ->update([
                'namaPeserta'=> $request ->namaPeserta,
                'asalSekolah'=> $request ->asalSekolah,
                'pilihanTryout'=> $request ->pilihanTryout,
                'email'=> $request ->email,
                'konfirmasiPembayaran'=> $request ->konfirmasiPembayaran,
            ]);
            return redirect('/peserta')-> with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
        Peserta::destroy($peserta ->noPeserta);
        return redirect('/peserta')-> with('status', 'Data berhasil dihapuskan!');
    }
}
