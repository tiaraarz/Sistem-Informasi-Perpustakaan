@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Peminjam</h2>
    <a href="{{ url('/peminjam/create') }}"><button class="btn-sm mb-3" style="background-color:rgb(0, 64, 255); color: white; border: none; padding: 5px 10px; cursor: pointer;" >Tambah Peminjam</button></a>
    <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>NAMA PEMINJAM</th>
            <th>ALAMAT</th>
            <th>NOMOR HP</th>
            <th>EMAIL</th>
            <th>TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama_peminjam }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->nomor_hp }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->tanggal_lahir }}</td>
            <td>{{ $row->jenis_kelamin }}</td>
            <td><a href="{{ url('peminjam/' . $row->id . '/edit') }}"> <button style="background-color: #ffa500; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Edit
                    </button>
                <td>
                    <form action="{{ url('peminjam/' . $row->id) }}" method="POST">
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