<h1>Edit Data Warga</h1>
<form action="/warga/{{ $warga->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="namaWarga" placeholder="Nama Warga" value="{{ $warga->namaWarga }}"> <br>
    <input type="text" name="nik" placeholder="NIK" value="{{ $warga->nik }}"> <br>
    <input type="text" name="no_kk" placeholder="Nomor KK" value="{{ $warga->no_kk }}"><br>
    <select name="jenis_kelamin" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" placeholder="Alamat" cols="30" rows="10" >{{ $warga->alamat }}</textarea><br>
    <input type="submit" name="submit" value="update">
</form>