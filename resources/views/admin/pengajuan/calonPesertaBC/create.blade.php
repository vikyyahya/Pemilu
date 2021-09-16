@extends('layouts.master')

@section('title', 'Tambah Data Calon Peserta UPK Paket B/C')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Calon Peserta Paket B/C</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>

        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jk" id="jk" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="Lelaki">Lelaki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama_Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" name="jk" id="jk" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                            </select>
                        </div>   
                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <select class="form-control" name="jk" id="jk" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto_kk">Scan Ijazah</label>
                            <input type="file" class="form-control" id="foto_kk" name="foto_kk" placeholder="Scan KK">
                            <p class="text-danger">File PDF Max 5MB</p>
                        </div>
                    </div> 
                </div>
            </div>
                
            <div class="box-footer">
                <div class="text-center">
                    <a href="#" class="btn btn-danger">Batal</a>
                    <a href="{{ route('bc.index') }}" class="btn btn-info">Simpan</a>
                </div>
            </div>
        </form>

    </div>

@endsection