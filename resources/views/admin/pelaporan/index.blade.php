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
                    <h3 class="box-title">
                        <a href="#" class="btn btn-primary btn-sm">Tambah Data <i class="fa fa-user-plus"></i> </a>
                    </h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Pelaporan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Keputusan</th>
                                <th>Progres</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kelulusan Peserta Didik Paket A</td>
                                    <td>15 Juni 2021 / 14:09:47</td>
                                    <td>Peserta UPK : 31 Laki-laki : 19 Perempuan : 12</td>
                                    <td>Sudah di vaksin</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye">Petunjuk Pengisian</i> </a>
                                        <a href="#" class="btn btn-sm btn-success"> <i class="fa fa-eye">Download BA</i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-eye">Laporan Nilai</i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Penggunaan DAK Nonfisik BOP Kesetaraan TA. 2021 tahap 2</td>
                                    <td>30 Juni 2021 / 13:26:34</td>
                                    <td>Peserta UPK : 31 Laki-laki : 19 Perempuan : 12</td>
                                    <td>Sudah di vaksin</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye">Petunjuk Pengisian</i> </a>
                                        <a href="#" class="btn btn-sm btn-success"> <i class="fa fa-eye">Download BA</i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-eye">Laporan Nilai</i> </a>
                                    </td>
                                </tr>
                        </tbody>

                    </table>
                </div>
                <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>

                

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