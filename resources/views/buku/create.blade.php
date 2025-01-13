@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Buku</h2>

    <form action="{{ url('/buku') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>ISBN</label>
            <input type="text" name="isbn" class="form-control">
        </div>
        <div class="mb-3">
            <label>JUDUL BUKU</label>
            <input type="text" name="judul_buku" class="form-control">
        </div>
        <div class="mb-3">
            <label>PENGARANG</label>
            <input type="text" name="pengarang" class="form-control">
        </div>
        <div class="mb-3">
            <label>TAHUN TERBIT</label>
            <input type="text" name="tahun_terbit" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection