@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Peminjaman</h2>

    <form action="{{ url('/peminjaman') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="peminjaman_id_peminjam">ID PEMINJAM</label>
            <select name="peminjaman_id_peminjam" id="peminjaman_id_peminjam" class="form-control">
                @foreach ($rows['peminjaman_id_peminjam'] as $row)
                <option value="{{ $row->id }}">{{ $row->nama_peminjam }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="peminjaman_id_buku">ID BUKU</label>
            <select name="peminjaman_id_buku" id="peminjaman_id_buku" class="form-control">
                @foreach ($rows['peminjaman_id_buku'] as $row)
                <option value="{{ $row->id }}">{{ $row->judul_buku }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_mulai">TANGGAL MULAI</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_batas_kembali">TANGGAL BATAS KEMBALI</label>
            <input type="date" name="tanggal_batas_kembali" id="tanggal_batas_kembali" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali">TANGGAL KEMBALI</label>
            <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jumlah_buku_dipinjam">JUMLAH BUKU DIPINJAM</label>
            <input type="number" name="jumlah_buku_dipinjam" id="jumlah_buku_dipinjam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jumlah_buku_dikembalikan">JUMLAH BUKU DIKEMBALIKAN</label>
            <input type="number" name="jumlah_buku_dikembalikan" id="jumlah_buku_dikembalikan" class="form-control" required>
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>

@endsection
