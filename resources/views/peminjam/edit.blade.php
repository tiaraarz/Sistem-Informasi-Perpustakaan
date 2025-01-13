@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Peminjam</h3>
        <form action="{{ url('/peminjam/'. $row->user_id) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>NAMA PEMINJAM</label>
                <input type="text" class="form-control"name="nama_peminjam" value="{{ $row->user_nama }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control"name="alamat" value="{{ $row->user_email }}"></>
            </div>
            <div class="mb-3">
                <label>NOMOR HP</label>
                <input type="text" class="form-control"name="nomor_hp" value="{{ $row->user_pass }}"></>
            </div>
            <div class="mb-3">
                <label>EMAIL</label>
                <input type="text" class="form-control"name="email" value="{{ $row->user_alamat }}"></>
            </div>
            <div class="mb-3">
                <label>TANGGAL LAHIR</label>
                <input type="text" class="form-control"name="tanggal_lahir" value="{{ $row->user_hp }}"></>
            </div>
            <div class="mb-3">
                <label>JENIS KELAMIN</label>
                <input type="text" class="form-control"name="jenis_kelamin" value="{{ $row->user_pos }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection