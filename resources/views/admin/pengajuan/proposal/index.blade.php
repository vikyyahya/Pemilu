@extends('layouts.master')

@section('title', 'Ajuan Proposal')

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
                        <a href="#" class="btn btn-sm btn-download">Download <i class="fa fa-download"></i> </a>
                    </h3>
                    <br><br>
                    <h3 class="box-title"><b>Daftar lampiran</b></h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Lampiran</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sarana dan Prasarana</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jadwal Pelajawan</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>Data Tutor</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>RAB</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Data Peserta Didik</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th><center>SCAN IJAZAH TUTOR</center></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tutor 1</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tutor 2</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th><center>SCAN AKTE/IJAZAH PESERTA DIDIK</center></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Peserta 1</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Peserta 2</td>
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