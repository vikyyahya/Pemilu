@extends('layouts.master')

@section('title')
    Data DPT
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Alamat</th>                                                
                                              
                        <th>Jenis Kelamin</th>
                    </tr>
                    @php $id=0; @endphp
                    @foreach($dpt as $item)
                    @php $id++; @endphp
                </thead>
                <tbody>
                    <tr>
                        <td>{{$id}}</td>
                        <td>{{$item->nik}}</td>
                        <td>{{$item->nama}}</td>
                           
                        <td>{{$item->alamat}}</td>                                           
                        <td>{{$item->jenis_kelamin}}</td>                                           
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush