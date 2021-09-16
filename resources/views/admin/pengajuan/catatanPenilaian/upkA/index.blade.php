@extends('layouts.master')

@section('title', 'Catatan Penilaian')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{ session('status') }}
                </div>
            @endif

            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>

                    <h3 class="box-title"><b>Catatan Penilaian</b></h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                            </tr> 
                            <tr>
                                <td>3</td>
                                <td></td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="text-right">
        <a href="{{ route('verifikasi.upka.index') }}" class="btn btn-back">Kembali</a>
        <a href="{{ route('upkbc.index') }}" class="btn btn-next">Lanjut</a>
    </div> --}}
@endsection