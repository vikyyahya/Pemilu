@extends('layouts.master')

@section('title')
    Menu Awal
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{ session('status') }}
                </div>
            @endif

            <div class="box box-default">
                <div class="box-header">
                  
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Tanggal</th>
                                <th>Judul Informasi</th>
                                <th>Isi Informasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>21 - November - 2021</td>
                                    <td>Pengumuman Libur Nasional</td>
                                    <td>Hari libur nasional pada tanggal 10 Desember .....</td>
                                    <td class="text-center">
                                        <a href="/detail_informasi" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>22 - November - 2021</td>
                                    <td>Rapat Bulanan</td>
                                    <td>Rapat Bulanan di adakan pada tanggal 13 Desember ..</td>
                                    <td class="text-center">
                                        <a href="/detail_informasi" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush