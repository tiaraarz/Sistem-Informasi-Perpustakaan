@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Peminjaman</h3>
    <form action="{{ url('/peminjaman/' . $row->id) }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="mb-3">
            <label>ID PEMINJAM</label>
            <input type="text" name="peminjaman_id_peminjam" class="form-control" value="{{ $row->peminjaman_id_peminjam }}" required>
        </div>

        <div class="mb-3">
            <label>ID BUKU</label>
            <input type="text" name="peminjaman_id_buku" class="form-control" value="{{ $row->peminjaman_id_buku }}" required>
        </div>

        <div class="mb-3">
            <label>TANGGAL MULAI</label>
            <input type="date" name="tanggal_mulai" class="form-control" value="{{ $row->tanggal_mulai }}" required>
        </div>

        <div class="mb-3">
            <label>TANGGAL BATAS KEMBALI</label>
            <input type="date" name="tanggal_batas_kembali" class="form-control" value="{{ $row->tanggal_batas_kembali }}" required>
        </div>

        <div class="mb-3">
            <label>TANGGAL KEMBALI</label>
            <input type="date" name="tanggal_kembali" class="form-control" value="{{ $row->tanggal_kembali }}" required>
        </div>

        <div class="mb-3">
            <label>JUMLAH BUKU DIPINJAM</label>
            <input type="number" name="jumlah_buku_dipinjam" class="form-control" value="{{ $row->jumlah_buku_dipinjam }}" required>
        </div>

        <div class="mb-3">
            <label>JUMLAH BUKU DIKEMBALIKAN</label>
            <input type="number" name="jumlah_buku_dikembalikan" class="form-control" value="{{ $row->jumlah_buku_dikembalikan }}" required>
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection
