@extends('layout/main')


@section ('row')
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Akun Try Out
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
                                            <th>Pilihan Try Out</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($akun as $akn )
                            <tr>
                                
                                <td>{{$akn->noPeserta}}</td>
                                <td>{{$akn->namaPeserta}}</td>
                                <td>{{$akn->pilihanTryout}}</td>
                                <td>{{$akn->username}}</td>
                                <td>{{$akn->password}}</td>
                                <td >
                             
                                    <a href="/akun/{{$akn ->noPeserta}}/ubah" class="btn btn-primary btn-md center-block" Style="width: 100px;"> Ubah</a>
                                    <form action="/akun/{{$akn->noPeserta}}" method="POST" class="d-inline" >
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
