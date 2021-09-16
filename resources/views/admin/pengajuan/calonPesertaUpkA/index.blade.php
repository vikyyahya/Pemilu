@extends('layouts.master')

@section('title', 'Data Calon Peserta UPK Paket A')

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
                        <a href="{{ route('upka.create') }}" class="btn btn-sm btn-plus">Tambah Data <i class="fa fa-user-plus"></i> </a>
                    </h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Peserta</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Ibu</th>
                                <th>NISN</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                                <th>Scan KTP/AKTE</th>
                                <th>Scan KK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa  fa-trash"></i> </a>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="text-right">
        <a href="#" class="btn btn-back">Kembali</a>
        <a href="{{ route('verifikasi.upka.index') }}" class="btn btn-next">Lanjut</a>
    </div>
@endsection