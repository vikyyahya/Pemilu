@extends('layouts.master')

@section('title', 'Tambah Data Tutor Paket A-B-C')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Tutor Paket A-B-C</h3>

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
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Pendidikan Terkahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Pendidikan Terakhir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Jurusan</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Jurusan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">Mata Pelajaran Diampu</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="foto_kk">Scan SK Tutor</label>
                            <input type="file" class="form-control" id="foto_kk" name="foto_kk" placeholder="Scan KK">
                            <p class="text-danger">File PDF Max 5MB</p>
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
                    <a href="{{ route('tutor.index') }}" class="btn btn-info">Simpan</a>
                </div>
            </div>
        </form>

    </div>

@endsection