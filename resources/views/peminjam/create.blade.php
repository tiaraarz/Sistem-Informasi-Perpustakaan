@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Peminjam</h2>

    <form action="{{ url('/peminjam') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>NAMA PEMINJAM</label>
            <input type="text" name="nama_peminjam" class="form-control">
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label>NOMOR HP</label>
            <input type="number" name="nomor_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label>EMAIL</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>TANGGAL LAHIR</label>
            <input type="DATE" name="tanggal_lahir" class="form-control">
        </div>
        <div class="mb-3">
        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki-laki">Laki-laki</label><br>

        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label><br>
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection