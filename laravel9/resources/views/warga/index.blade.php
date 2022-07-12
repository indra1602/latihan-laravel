@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Warga') }}</div>

                <div class="card-body">

                    <a class="btn btn-primary" href="warga/create">Add Warga</a>
                    <table class="table table-hover">
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>No kk</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($warga as $warga)
                            <tr>
                                <td>{{ $warga->id }}</td>
                                <td>{{ $warga->namaWarga }}</td>
                                <td>{{ $warga->nik }}</td>
                                <td>{{ $warga->no_kk }}</td>
                                <td>{{ $warga->jenis_kelamin }}</td>
                                <td>{{ $warga->alamat }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-warning" href="/warga/{{ $warga->id }}/edit">Edit</a>
                                        <form action="/warga/{{ $warga->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger" type="submit" value="Delet">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection