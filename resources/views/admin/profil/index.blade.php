@extends('layouts.master')

@section('title', 'Profil')

@section('content')
@if (Auth::user()->role_id != 1 )
    <div class="row">
        {{-- @foreach ($users as $user) --}}
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-body box-profile">
                        @if ($user->foto_user != null)
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/'.$user->foto_user) }}" alt="User profile picture">
                        @else
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/users/profile.png') }}" alt="User profile picture">
                        @endif
                        
                        {{-- <h3 class="profile-username text-center"><b></b></h3> --}}

                        <ul class="list-group list-group-unbordered">
                        </ul>
                    </div>
                    <div class="box-footer">
                        <div class="text-center">
                            <a href="{{ route('profil.edit', Auth::user()->id) }}" class="btn btn-sm btn-plus">Edit Profil</a>
                            {{-- <a href="#" class="btn btn-sm btn-danger">Edit Password</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $user->nama_lembaga ?? '' }}</h3>
                    </div>
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i> Deskripsi</strong>
        
                        <p class="text-muted">
                            {{ $user->deskripsi ?? '' }}
                        </p>
        
                        <hr>
        
                        <strong><i class="fa fa-id-badge margin-r-5"></i> NPSN</strong>
        
                        <p class="text-muted">{{ $user->nik ?? '' }}</p>
        
                        <hr>

                        <strong><i class="fa fa-book margin-r-5"></i> Nama</strong>
        
                        <p class="text-muted">{{ $user->nama_lembaga ?? '' }}</p>
        
                        <hr>

                        <strong><i class="fa fa-dropbox margin-r-5"></i> Website</strong>
        
                        <p class="text-muted">{{ $user->website ?? '' }}</p>
        
                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> No. Telepon</strong>
        
                        <p class="text-muted">{{ $user->no_telepon ?? '' }}</p>
        
                        <hr>
        
                        <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
        
                        <p class="text-muted">{{ $user->email ?? '' }}</p>
        
                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
        
                        <p class="text-muted">{{ $user->alamat ?? '' }}</p>
        
                        <hr>
                    </div>
                </div>
            </div>

        </div>
        {{-- @endforeach --}}
    </div>
    @endif
@endsection