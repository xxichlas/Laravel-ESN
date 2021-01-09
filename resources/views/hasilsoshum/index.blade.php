@extends('layout/main')


@section ('row')
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Hasil Try Out Soshum
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <!-- @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif -->
                                    <thead>
                                        <tr>
                                            <th>No Peserta</th>
                                            <th>Nama Peserta</th>
                                            <th>Pilihan Try Out</th>
                                            <th>Nilai</th>
                                            <th>Ranking</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($hasilsoshum as $hsl )
                                        <tr>
                                            
                                            <td>{{$hsl->noPeserta}}</td>
                                            <td>{{$hsl->namaPeserta}}</td>
                                            <td>{{$hsl->pilihanTryout}}</td>
                                            <td>{{$hsl->hasil}}</td>
                                            <td>{{$hsl->ranking}}</td>
                                            
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
