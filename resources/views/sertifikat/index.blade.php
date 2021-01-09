@extends('layout/main')


@section ('row')
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Sertifikat
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
                                            <th>Nilai</th>
                                            <th>Ranking</th>
                                            <th>Nomor Sertifikat</th>
                                            <th>File Sertifikat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($sertifikat as $sft )
                                        <tr>
                                            
                                            <td>{{$sft->noPeserta}}</td>
                                            <td>{{$sft->namaPeserta}}</td>
                                            <td>{{$sft->pilihanTryout}}</td>
                                            <td>{{$sft->hasil}}</td>
                                            <td>{{$sft->ranking}}</td>
                                            <td>{{$sft->nomorSertifikat}}</td>
                                            <td><a href="{{$sft->fileSertifikat}}"> Download </a></td>
                                            <td>
                                                <a href="/sertifikat/{{$sft ->noPeserta}}/ubah" class="btn btn-primary btn-md center-block" Style="width: 100px;"> Ubah</a>
                                                <!-- <form action="/sertifikat/{{$sft->noPeserta}}" method="POST" class="d-inline" >
                                                    @method('delete')
                                                    @csrf
                                                    <button type='submit' class="btn btn-danger btn-md center-block " Style="width: 100px;" onclick="return deleteconfirm();">Delete</button>
                                                </form> -->
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
