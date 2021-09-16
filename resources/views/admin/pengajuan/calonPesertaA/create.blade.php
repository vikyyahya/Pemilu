@extends('layouts.master')

@section('title', 'Tambah Data Calon Peserta Paket A')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Calon Peserta Paket A</h3>

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
                                <option value="lelaki">Lelaki</option>
                                <option value="perempuan">Perempuan</option>
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
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="4" class="form-control" placeholder="Alamat"></textarea>
                        </div>   
                        <div class="form-group">
                            <label for="foto_ka">Scan KTP/AKTE</label>
                            <input type="file" class="form-control" id="foto_ka" name="foto_ka" placeholder="Scan K-A">
                            <p class="text-danger">File PDF Max 5MB</p>
                        </div>
                        <div class="form-group">
                            <label for="foto_kk">Scan KK</label>
                            <input type="file" class="form-control" id="foto_kk" name="foto_kk" placeholder="Scan KK">
                            <p class="text-danger">File PDF Max 5MB</p>
                        </div>
                    </div> 
                </div>
            </div>
                
            <div class="box-footer">
                <div class="text-center">
                    <a href="#" class="btn btn-danger">Batal</a>
                    <a href="{{ route('a.index') }}" class="btn btn-info">Simpan</a>
                </div>
            </div>
        </form>

    </div>

@endsection