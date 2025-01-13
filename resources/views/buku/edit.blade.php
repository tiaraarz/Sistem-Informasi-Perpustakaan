@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data buku</h3>
        <form action="{{ url('/buku/' . $row->id) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>ISBN</label>
                <input type="text" class="form-control"name="isbn" value="{{ $row->isbn }}"></>
            </div>
            <div class="mb-3">
                <label>JUDUL BUKU</label>
                <input type="text" class="form-control"name="judul_buku" value="{{ $row->judul_buku }}"></>
            </div>
            <div class="mb-3">
                <label>PENGARANG</label>
                <input type="text" class="form-control"name="pengarang" value="{{ $row->pengarang }}"></>
            </div>
            <div class="mb-3">
                <label>TAHUN TERBIT</label>
                <input type="text" class="form-control"name="tahun_terbit" value="{{ $row->tahun_terbit }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection