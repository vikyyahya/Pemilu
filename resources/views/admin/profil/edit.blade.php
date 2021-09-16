@extends('layouts.master')

@section('title', 'Edit Profil')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Profil</h3>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
    </div>

    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="catatan">Deskripsi</label>
                        <textarea name="catatan" id="catatan" rows="3" class="form-control" placeholder="Tidak ada catatan"
                        value="Nuansa Sukatani Rajeg">
                        </textarea>
                    </div>
                
                    <div class="form-group">
                        <label for="name">NPSN</label>
                        <input type="text" class="form-control" id="name" name="name" value="P2965858">
                    </div>
                
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="PKBM Nurul Ilmi">
                    </div>
                
                    <div class="form-group">
                        <label for="name">Website</label>
                        <input type="text" class="form-control" id="name" name="name" value="www.pkbmnurulilmi.blogspot.com">
                    </div>
                    <div class="form-group">
                        <label for="name">No. Telepon</label>
                        <input type="text" class="form-control" id="name" name="name" value="081234345656">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" id="name" name="name" value="pkbmnurulilmi@gmail.com">
                    </div>
                
                    <div class="form-group">
                        <label for="catatan">Alamat</label>
                        <textarea name="catatan" id="catatan" rows="3" class="form-control">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <p class="text-danger"></p>
                            <div class="widget-user-image">
                                <img class="img" src="{{ asset('assets/images/pns.jpeg') }}" alt="User Avatar" width="100" height="100">
                            </div>
                        <p class="text-danger">file Max 5MB</p>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="box-footer">
            <div class="text-center">
                <a href="{{ route('profil.index') }}" class="btn btn-danger">Batal</a>
                <a href="{{ route('profil.index') }}" class="btn btn-info">Simpan</a>
                {{-- <button type="submit" class="btn btn-info">Simpan</button> --}}
            </div>
        </div>
    </form>

</div>
@endsection