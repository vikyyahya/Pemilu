@extends('layouts.master')

@section('title', 'Rencana Anggaran Belanja (RAB)')

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
                    <h5>1.  Penggunaan dana harus mengacu kepada Petunjuk Teknis.</h5>
                    <h5>2.  Pemberian transport harus dilengkapi Surat Tugas.</h5>
                    <h5>3.  Pemberian honor harus dilengkapi SK dari pimpinan lembaga.</h5>
                    <h5>4.  Perubahan RAB harus ada Berita Acara Perubahan dan diketahui Dinas Pendidikan Kabupaten Tangerang.</h5>
                    <br>
                    <h3 class="box-title">
                        <a href="{{ route('rab.create') }}" class="btn btn-primary btn-sm">Tambah <i class="fa fa-user-plus"></i> </a>
                    </h3>
                    <br><br>
                    <h3 class="box-title"><b>Paket A-B-C Global</b></h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Komponen</th>
                                <th>Jumlah</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PELAKSANAAN KEGIATAN OPERASIONAL PEMBELAJARAN</td>
                                <td></td>
                                <td>6.550.000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>Pengadaan dan pemeliharaan peralatan pembelajaran</td>
                                <td>200.000</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>b</td>
                                <td>Pengadaan dan pemeliharaan alat peraga pendidikan</td>
                                <td>100.000</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>c</td>
                                <td>Pengadaan modul/buku</td>
                                <td>-</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>d</td>
                                <td>Pengadaan alat, bahan praktik keterampilan, dan media pembelajaran</td>
                                <td>-</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>e</td>
                                <td>Penyusunan silabus dan rencana program pembelajaran</td>
                                <td>-</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>f</td>
                                <td>pelaksanaan evaluasi pembelajaran</td>
                                <td>5.250.000</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>g</td>
                                <td>penyediaan dan pelaksaan kegiatan lainnya dalam operasional kegiatan pembelajaran</td>
                                <td>1.000.000</td>
                                <td></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>2</td>
                                <td>PELAKSANAAN KEGIATAN PENDUKUNG PEMBELAJARAN</td>
                                <td></td>
                                <td>7.000.000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection