@extends('layouts.master')

@section('title', 'Profil')

@section('css')
    {{-- <style>
        .img-circle {
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
        }
    </style> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('assets/images/pns.jpeg') }}" alt="User profile picture">
                        
                        {{-- <h3 class="profile-username text-center"><b></b></h3> --}}

                        <ul class="list-group list-group-unbordered">
                        </ul>
                    </div>
                    <div class="box-footer">
                        <div class="text-center">
                            <a href="{{ route('profil.edit') }}" class="btn btn-sm btn-plus">Edit Profil</a>
                            {{-- <a href="#" class="btn btn-sm btn-danger">Edit Password</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">PKBM Nurul Ilmi</h3>
                    </div>
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i> Deskripsi</strong>
        
                        <p class="text-muted">
                            Lembaga pendidikan adalah lembaga atau tempat berlangsungnya proses pendidikan dengan tujuan mengubah tingkah laku individu ke arah yang lebih baik melalui interaksi dengan lingkungan sekitar
                        </p>
        
                        <hr>
        
                        <strong><i class="fa fa-id-badge margin-r-5"></i> NPSN</strong>
        
                        <p class="text-muted">P2965858</p>
        
                        <hr>

                        <strong><i class="fa fa-book margin-r-5"></i> Nama</strong>
        
                        <p class="text-muted">PKBM Nurul Ilmi</p>
        
                        <hr>

                        <strong><i class="fa fa-dropbox margin-r-5"></i> Website</strong>
        
                        <p class="text-muted">www.pkbmnurulilmi.blogspot.com</p>
        
                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> No. Telepon</strong>
        
                        <p class="text-muted">081234345656</p>
        
                        <hr>
        
                        <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
        
                        <p class="text-muted">pkbmnurulilmi@gmail.com</p>
        
                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
        
                        <p class="text-muted">Nuansa Sukatani, Rajeg</p>
        
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection