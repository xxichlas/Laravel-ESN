@extends('layout/main')


@section ('row')
<div class="panel panel-primary">
    <div class="panel-heading">
        Edit Data Peserta
    </div>
    <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="/peserta/{{$peserta->noPeserta}}">
                                    @method('PATCH')
                                    @csrf
                                        <div class="form-group">
                                            <label>Nama Peserta</label>
                                            <input class="form-control" name="namaPeserta" value="{{$peserta->namaPeserta}}" />
                                        </div>

                                        <div class="form-group">
                                            <label>Asal Sekolah</label>
                                            <input class="form-control" name="asalSekolah" value="{{$peserta->asalSekolah}}" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pilihan Try Out</label>
                                            <select class="form-control" name="pilihanTryout" value="{{$peserta->pilihanTryout}}">
                                                <option>Saintek</option>
                                                <option>Soshum</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="{{$peserta->email}}" />
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>No HP</label>
                                            <input class="form-control" name="noHp" value="" />
                                        </div> -->

                                        <div class="form-group">
                                            <label>Konfirmasi Pembayaran</label>
                                            <select class="form-control" name="konfirmasiPembayaran" value="{{$peserta->konfirmasiPembayaran}}">
                                                <option>Belum Lunas</option>
                                                <option>Lunas</option>
                                            </select>
                                        </div>    

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