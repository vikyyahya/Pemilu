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

    <form action="{{ route('profil.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">    
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Deskripsi">{{ $edit_user->deskripsi ?? '' }}</textarea>
                        <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                    </div>
                
                    <div class="form-group">
                        <label for="npsn">NPSN</label>
                        <input type="text" class="form-control" id="npsn" name="npsn" value="{{ $edit_user->nik ?? '' }}" placeholder="NPSN">
                        <p class="text-danger">{{ $errors->first('nik') }}</p>
                    </div>
                
                    <div class="form-group">
                        <label for="nama_lembaga">Nama</label>
                        <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="{{ $edit_user->nama_lembaga ?? '' }}" placeholder="Nama Lembaga">
                        <p class="text-danger">{{ $errors->first('nama_lembaga') }}</p>
                    </div>
                
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website" value="{{ $edit_user->website ?? '' }}" placeholder="Website">
                        <p class="text-danger">{{ $errors->first('website') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">NO. Telepon</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $edit_user->no_telepon ?? '' }}" placeholder="NO. Telepon">
                        <p class="text-danger">{{ $errors->first('no_telepon') }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $edit_user->email ?? '' }}" placeholder="Email">
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    </div>
                
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $edit_user->alamat ?? '' }}" placeholder="Alamat">
                        <p class="text-danger">{{ $errors->first('alamat') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="foto_user">Foto</label>
                        <input type="file" class="form-control" id="foto_user" name="foto_user">
                        <p class="text-danger">{{ $errors->first('foto_user') }}</p>
                        @if ($edit_user->foto_user != null)
                            <div class="widget-user-image">
                                <img class="img" src="{{ asset('uploads/'.$edit_user->foto_user) }}" alt="User Avatar" width="100" height="100">
                            </div>
                        @else
                            <div class="widget-user-image">
                                <img class="img" src="{{ asset('default/default.png') }}" alt="User Avatar" width="100" height="100">
                            </div>
                        @endif
                        <p class="text-danger">Ukuran file Max 1MB</p>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="box-footer">
            <div class="text-center">
                <a href="{{ route('profil.index') }}" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
                {{-- <a href="{{ route('profil.index') }}" class="btn btn-info">Simpan</a> --}}
                {{-- <button type="submit" class="btn btn-info">Simpan</button> --}}
            </div>
        </div>
    </form>

</div>
@endsection