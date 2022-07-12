@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Tambah Data Warga</h1>
    <form action="/warga/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="namaWarga">Nama Warga</label>
            <input type="text" class="form-control" name="namaWarga" placeholder="Nama Warga" id="namaWarga"> <br>
        </div>
        <div class="form-group">
            <label for="nik">Nomor NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="NIK" id="nik"> <br>
        </div>
        <div class="form-group">
            <label for="no_kk">Nomor Kartu Keluarga</label>
            <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor KK"><br>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat Warga</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat" cols="30" rows="10" id="alamat"></textarea><br>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection