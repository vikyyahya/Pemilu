@extends('layouts.master')

@section('title')
    Detail Daftar Pengajuan
@endsection

@section('content')
<div class="col-md-6">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Pengajuan</h3>
        </div>
        <div class="box-body">
            <strong>Jenis Pengajuan</strong>
            <p class="text-muted">
                ---------------
            </p>
            <hr>
            <strong>Tanggal Pengajuan</strong>
            <p class="text-muted">02/07/201</p>
            <hr>
            <strong>Status</strong>
            <p>
                <span class="badge bg-red">Dalam Proses</span>
            </p>
            <hr>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tanggapan</h3>
        </div>

    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="box-body">
    <div class="form-group">
        <label for="name">Jenis Pengajuan</label>
        <input type="text" class="form-control" id="name" name="name" value="Jenis Pengajuan" placeholder="Nama">
    </div>

    <div class="form-group">
        <label for="name">Tanggal Pengajuan</label>
        <input type="date" class="form-control" id="name" name="name" value="">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="gender_id" id="gender_id" style="width: 100%;" required>
            <option>Dalam Proses</option>
            <option>Direvisi</option>
            <option>Selesai</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <div class="form-group">
        <label for="catatan">Catatan Penilaian</label>
        <textarea name="catatan" id="catatan" rows="4" class="form-control" placeholder="Tidak ada catatan"></textarea>
    </div>
</div>
    <div class="box-footer">
        <div class="text-center">
            <a href="#" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </div>
</form>
</div>
</div>
        
@endsection