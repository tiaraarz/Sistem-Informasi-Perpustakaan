@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family:serif;">Peminjaman</h2>
    <a href="{{ url('/peminjaman/create') }}">
    <button class="btn-sm mb-3" style="background-color:rgb(0, 64, 255); color: white; border: none; padding: 5px 10px; cursor: pointer;" >Tambah Peminjaman</button></a>
    <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>ID PEMINJAM</th>
            <th>ID BUKU</th>
            <th>TANGGAL MULAI</th>
            <th>TANGGAL BATAS KEMBALI</th>
            <th>TANGGAL KEMBALI</th>
            <th>JUMLAH BUKU DIPINJAM</th>
            <th>JUMLAH BUKU DIKEMBALIKAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->peminjaman_id_peminjam }}</td>
            <td>{{ $row->peminjaman_id_buku }}</td>
            <td>{{ $row->tanggal_mulai }}</td>
            <td>{{ $row->tanggal_batas_kembali }}</td>
            <td>{{ $row->tanggal_kembali }}</td>
            <td>{{ $row->jumlah_buku_dipinjam }}</td>
            <td>{{ $row->jumlah_buku_dikembalikan }}</td>
            <td>
                <a href="{{ url('peminjaman/' . $row->id . '/edit') }}">
                    <button style="background-color: #ffa500; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Edit
                    </button>
                </a>
            </td>
            <td>
                <form action="{{ url('peminjaman/' . $row->id) }}" method="POST">
                    @method('DELETE')
                    @csrf 
                    <button onclick="return confirm('Apakah anda yakin?')" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
