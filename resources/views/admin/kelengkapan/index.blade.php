@extends('layouts.master')

@section('title', 'Kelengkapan')

@section('content')
    <div>
        <div class="box-header with-border">
            {{-- <h3 class="box-title">Kelengkapan</h3> --}}

            <div class="box-tools pull-right">
                {{-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> --}}
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> --}}
            </div>
        </div>

        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="text-right" style="margin-bottom: 10px">
                {{-- <a href="{{ route('upka.index') }}" class="btn btn-info ">Ubah</a> --}}
                <a href="{{ route('editkelengkapan.index') }}" class="btn btn-info ">Ubah</a>
            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-default">
                        {{-- <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div> --}}

                        <div>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        
                                        <tr>
                                            <th style="width:50%">NPSN</th>
                                            <td>- </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Lembaga</th>
                                            <td>- </td>
                                        </tr>

                                        <tr>
                                            <th >Alamat – Jalan/Dusun</th>
                                           
                                            <td>- </td>

                                        </tr>


                                        <tr>
                                            <th>Kecamatan</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Desa / Kelurahan</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Pimpinan Lembaga</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Nomor HP Pimpinan Lembaga</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>NPWP Lembaga</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Lembaga di NPWP</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Dokumen NPWP</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Dokumen NPWP</th>
                                            <td>-</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-default">
                        {{-- <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div> --}}

                        <div>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width:50%">Nomor SK Pendirian LembagaIK</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Tanggal SK Pendirian Lembaga</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Nomor SK Izin Operasional Lembaga</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Tanggal SK Izin Operasional Lembaga</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Scan SK Izin Operasional Lembaga</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Nomor Rekening Bank Lembaga</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Rekening Bank Atas Nama</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Nama Bank</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Cabang / Unit</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Alamat Lembaga pada Buku Rekening</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Scan Rekening Bank</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Akreditasi</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Hasil Akreditasi</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Instuisi Penerbit Akreditasi</th>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <th>Scan / Fotocopy Sertifikat Akreditasi</th>
                                            <td>-</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="box-footer">

            </div>
        </form>

    </div>

@endsection
