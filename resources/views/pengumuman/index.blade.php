@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengumuman</div>
                <div class="card-body">
                    <a href="{!! route('pengumuman.create') !!}" class="btn btn-danger">Tambah Data</a>
                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Pengumuman Id</th>
                        <th scope="col">User_id</th>
                        
                        </tr>
                     </thead>
                    <tbody>

                        @foreach( $Pengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->Pengumuman_id !!}</td>
                        <th scope="col">User_id</th>
                        <td>
                         <a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-success">Lihat</a>
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection