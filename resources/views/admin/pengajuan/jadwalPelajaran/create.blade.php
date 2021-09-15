@extends('layouts.master')

@section('title', 'Jadwal Pelajaran')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Jadwal Pelajaran</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>

        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Program</label>
                            <select class="form-control" name="jk" id="jk" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="">Paket A</option>
                                <option value="">Paket B</option>
                                <option value="">Paket C</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hari Belajar</label>
                                    <select class="form-control" name="jk" id="jk" style="width: 100%;" required>
                                        <option> -- Pilih -- </option>
                                        <option value="">Senin</option>
                                        <option value="">Selasa</option>
                                        <option value="">Rabu</option>
                                        <option value="">Kamis</option>
                                        <option value="">Jumat</option>
                                        <option value="">Sabtu</option>
                                        <option value="">Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama_ibu">Tanggal Belajar</label>
                                    <input type="date" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama_ibu">Waktu Belajar</label>
                                    <input type="time" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto_kk">Jadwa</label>
                            <input type="file" class="form-control" id="foto_kk" name="foto_kk" placeholder="Scan KK">
                            <p class="text-danger">File PDF Max 5MB</p>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="box-footer">
                <div class="text-center">
                    <a href="#" class="btn btn-danger">Batal</a>
                    <a href="{{ route('jadwal.index') }}" class="btn btn-info">Simpan</a>
                </div>
            </div>
        </form>

    </div>

@endsection