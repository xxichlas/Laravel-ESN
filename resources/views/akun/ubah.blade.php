@extends('layout/main')


@section ('row')
<div class="panel panel-primary">
    <div class="panel-heading">
        Edit Akun Peserta
    </div>
    <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                
                                
                                
                                    <form method="POST" action="/akun/{{$akun->noPeserta}}" >
                                    @method('PATCH')
                                    @csrf
                                        <div class="form-group">
                                            <label>Nama Peserta</label>
                                            <input class="form-control" name="namaPeserta" disabled value="{{$akun->namaPeserta}}"  />
                                        </div>

                                        <div class="form-group">
                                            <label>Asal Sekolah</label>
                                            <input class="form-control" name="asalSekolah" disabled value="{{$akun->asalSekolah}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pilihan Tryout</label>
                                            <input class="form-control" name="asalSekolah" disabled value="{{$akun->pilihanTryout}}" />
                                        </div>

                            
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username"  value="{{$akun->username}}" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password"  value="{{$akun->password}}" />
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>No HP</label>
                                            <input class="form-control" name="noHp" value="" />
                                        </div> -->

                                        
                                        <!-- <div class="form-group">
                                            <label>Konfirmasi Pembayaran</label>
                                            <input class="form-control" name="konfirmasiPembayaran" value="" />
                                        </div> -->

                                        <div>
                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                        </div>

                                    </form>
                                    
                                 </div>
                            </div>
                            </div>
                            </div>
@endsection