<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Peminjam;

class PeminjamanController extends Controller
{
    public function index()
    {
        $rows = Buku::all();
        $rows = Peminjam::all();
        $rows = Peminjaman::all();
        return view('peminjaman.index', compact('rows')); 
    }

    public function create()
    {
        $rows['peminjaman_id_peminjam'] = Peminjam::all();
        $rows['peminjaman_id_buku'] = Buku::all();
        return view('peminjaman.create', compact('rows'));
    }

    public function store(Request $request)
    {
        Peminjaman::create([
            'peminjaman_id_peminjam' => $request->peminjaman_id_peminjam,
            'peminjaman_id_buku' => $request->peminjaman_id_buku,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_batas_kembali' => $request->tanggal_batas_kembali,
            'tanggal_kembali' => $request->tanggal_kembali,
            'jumlah_buku_dipinjam' => $request->jumlah_buku_dipinjam,
            'jumlah_buku_dikembalikan' => $request-> jumlah_buku_dikembalikan
        ]);

        return redirect('peminjaman');
    }

    public function edit($id)
    {
        $row = Peminjaman::findOrFail($id);

        return view('peminjaman.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'peminjaman_id_peminjam' => 'required',
            'peminjaman_id_buku' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_batas_kembali' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_buku_dipinjam' => 'required',
            'jumlah_buku_dikembalikan' => 'required',
        ],
        [
            'peminjaman_id_peminjam.required' => 'wajib diisi',
            'peminjaman_id_buku.required' => 'wajib diisi',
            'tanggal_mulai.required' => 'wajib diisi',
            'tanggal_batas_kembali.required' => 'wajib diisi',
            'tanggal_kembali.required' => 'wajib diisi',
            'jumlah_buku_dipinjam.required' => 'wajib diisi',
            'jumlah_buku_dikembalikan.required' => 'wajib diisi',
        ]
        );

        $row = Peminjaman::findOrFail($id); 
        $row->update([
            'peminjaman_id_peminjam' => $request->peminjaman_id_peminjam,
            'peminjaman_id_buku' => $request->peminjaman_id_buku,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_batas_kembali' => $request->tanggal_batas_kembali,
            'tanggal_kembali' => $request->tanggal_kembali,  
            'jumlah_buku_dipinjam' => $request->jumlah_buku_dipinjam, 
            'jumlah_buku_dikembalikan' => $request->jumlah_buku_dikembalikan
        ]);
        return redirect('peminjaman');
    }

    public function destroy($id)
    {
        $row = Peminjaman::findOrFail($id);
        $row->delete();

        return redirect('peminjaman')->with('success', 'Data peminjaman berhasil dihapus');
    }
}
