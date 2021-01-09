@extends('layout/main')


@section ('row')
<div class="panel panel-primary">
    <div class="panel-heading">
        Edit Sertifikat Peserta
    </div>
    <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">                                                     
                                    <form method="POST" action="/sertifikat/{{$sertifikat->noPeserta}}" >
                                    @method('PATCH')
                                    @csrf
                                        <div class="form-group">
                                            <label>Nama Peserta</label>
                                            <input class="form-control" name="namaPeserta" disabled value="{{$sertifikat->namaPeserta}}"  />
                                        </div>

                                        <div class="form-group">
                                            <label>Asal Sekolah</label>
                                            <input class="form-control" name="asalSekolah" disabled value="{{$sertifikat->asalSekolah}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pilihan Tryout</label>
                                            <input class="form-control" name="asalSekolah" disabled value="{{$sertifikat->pilihanTryout}}" />
                                        </div>

                            
                                        <div class="form-group">
                                            <label>Nomor Sertifikat</label>
                                            <input class="form-control" name="nomorSertifikat"  value="{{$sertifikat->nomorSertifikat}}" />
                                        </div>

                                        <div class="form-group">
                                            <label>File Sertifikat</label>
                                            <input class="form-control" name="fileSertifikat"  value="{{$sertifikat->fileSertifikat}}" />
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