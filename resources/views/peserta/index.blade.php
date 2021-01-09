@extends('layout/main')


@section ('row')
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Peserta Try Out
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                    <thead>
                                        <tr>
                                            <th>No Peserta</th>
                                            <th>Nama Peserta</th>
                                            <th>Asal Sekolah</th>
                                            <th>Pilihan Try Out</th>
                                            <th>Email</th>
                                            <!-- <th>No HP</th> -->
                                            <th>Bukti Pembayaran</th>
                                            <th>Konfirmasi Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($peserta as $pst )
                            <tr>
                                
                                <td>{{$pst->noPeserta}}</td>
                                <td>{{$pst->namaPeserta}}</td>
                                <td>{{$pst->asalSekolah}}</td>
                                <td>{{$pst->pilihanTryout}}</td>
                                <td>{{$pst->email}}</td>
                                <td>{{$pst->buktiPembayaran}}</td>
                                <td>{{$pst->konfirmasiPembayaran}}</td>
                                <td>
                                    <a href="/peserta/{{$pst ->noPeserta}}/ubah" class="btn btn-primary btn-md center-block" Style="width: 100px;"> Ubah</a>
                                    <form action="/peserta/{{$pst->noPeserta}}" method="POST" class="d-inline" >
                                        @method('delete')
                                        @csrf
                                        <button type='submit' class="btn btn-danger btn-md center-block " Style="width: 100px;" onclick="return deleteconfirm();">Hapus</button>
                                    </form>
                                </td>   
                            </tr>
                        @endforeach
                                    </tbody>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <script>
                            function deleteconfirm() {
                                if(!confirm("Apakah anda yakin untuk menghapus data ini?"))
                                event.preventDefault();
                            }
                            </script>
@endsection
