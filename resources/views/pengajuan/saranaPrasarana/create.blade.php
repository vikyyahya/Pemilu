@extends('layouts.master')

@section('title', 'Sarana dan Prasarana')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Sarana dan Prasarana</h3>

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
                            <label>Jenis</label>
                            <select class="form-control" name="jk" id="jk" style="width: 100%;" required>
                                <option> -- Pilih -- </option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                                <option value="">D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Jumlah</label>
                            <input type="number" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">Kondisi</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="nik">Keterangan</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="foto_kk">Foto</label>
                            <input type="file" class="form-control" id="foto_kk" name="foto_kk" placeholder="Scan KK">
                            <p class="text-danger">File PDF Max 5MB</p>
                        </div>
                    </div> 
                </div>
            </div>
                
            <div class="box-footer">
                <div class="text-center">
                    <a href="#" class="btn btn-danger">Batal</a>
                    <a href="{{ route('sarana.index') }}" class="btn btn-info">Simpan</a>
                </div>
            </div>
        </form>

    </div>

@endsection