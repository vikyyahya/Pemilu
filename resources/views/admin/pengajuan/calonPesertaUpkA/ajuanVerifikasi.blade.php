@extends('layouts.master')

@section('title', 'Ajuan Verifikasi')

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
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>

                    <p><b>Catatan</b></p>
                    <h5>1.  Pastikan instrumen sudah diisi dengan maksimal.</h5>
                    <h5>2.  Setelah proposal diajukan maka sudah tidak bisa dilakukan perubahan isi instrumen lagi.</h5>
                    <h5>3.  Anda dapat men-download hasil isian instrumen dan lampiran dengan tombol di bawah ini.</h5>
                    <h3 class="box-title">
                        <a href="#" class="btn btn-primary btn-sm">Download <i class="fa fa-user-plus"></i> </a>
                    </h3>
                    <br><br>
                    <h3 class="box-title"><b>Scan KTP/AKTE - KK</b></h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Peserta</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection