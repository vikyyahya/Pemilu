@extends('layouts.master')

@section('title', 'Daftar Pengajuan')

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
                                <th>NO</th>
                                <th>Jenis Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Satus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="badge bg-red">Dalam Proses</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-sticky-note"></i> </a>
                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa fa-lock"></i> </a>
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="badge bg-yellow">Direvisi</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-sticky-note"></i> </a>
                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa fa-lock"></i> </a>
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="badge bg-yellow">Direvisi</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-sticky-note"></i> </a>
                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa fa-lock"></i> </a>
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="badge bg-green">Selesai</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-sticky-note"></i> </a>
                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa fa-lock"></i> </a>
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="badge bg-blue">Disetujui</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-sticky-note"></i> </a>
                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa fa-lock"></i> </a>
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="badge bg-black">Ditolak</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-sticky-note"></i> </a>
                                        <a href="#" class="btn btn-sm btn-warning"> <i class="fa fa-lock"></i> </a>
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection