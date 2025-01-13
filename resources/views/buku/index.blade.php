    @extends ('layouts.app')

    @section('content')
    <div class="container">
        <h2 style="text-align: center; align-items: center; font-family:serif;">Buku</h2>
        <a href="{{ url('/buku/create') }}"><button class="btn-sm mb-3" style="background-color:rgb(0, 64, 255); color: white; border: none; padding: 5px 10px; cursor: pointer;" >Tambah Buku</button></a>
        <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
            <tr style="text-align:center;">
                <th>ID</th>
                <th>ISBN</th>
                <th>JUDUL BUKU</th>
                <th>PENGARANG</th>
                <th>TAHUN TERBIT</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($row as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->isbn }}</td>
                <td>{{ $row->judul_buku }}</td>
                <td>{{ $row->pengarang }}</td>
                <td>{{ $row->tahun_terbit }}</td>
                <td><a href="{{ url('buku/' . $row->id . '/edit') }}"><button style="background-color: #ffa500; color: white; border: none; padding: 5px 10px; cursor: pointer;"> Edit</button></a></td>
                    <td>
                        <form action="{{ url('buku/' . $row->id) }}" method="POST">
                            @method('DELETE')
                            @csrf 
                            <button onclick="return confirm('Apakah anda yakin?')" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;">Delete</button>

                        </form>
                    </td>
            </tr> 
            @endforeach
        </table>
    </div>
    @endsection