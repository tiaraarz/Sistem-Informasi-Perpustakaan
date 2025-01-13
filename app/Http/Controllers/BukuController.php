<?php

namespace App\Http\Controllers;

use App\Models\Buku; // Import model Buku
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua buku dari database
        $row = Buku::all();
        

        return view('buku.index', compact('row'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk menambah buku baru
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        Buku::create([
            'isbn' => $request->isbn,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        // Redirect setelah menyimpan data
        return redirect('buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan detail buku berdasarkan ID
        $row = Buku::findOrFail($id);
        
        // Mengembalikan data ke view atau API response
        return view('buku.show', compact('row')); // jika menggunakan view
 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mengambil data buku yang akan diedit
        $row = Buku::findOrFail($id);
        
        // Menampilkan form untuk mengedit buku
        return view('buku.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data input
       $request->validate([
            'isbn' => 'required',
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'tahun_terbit' => 'required'
        ]);

        $row = Buku::findOrFail($id);
            $row->update([
                'isbn'=>$request->isbn,
                'judul_buku'=>$request->judul_buku,
                'pengarang' =>$request->pengarang,
                'tahun_terbit' =>$request->tahun_terbit
            ]);
        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus buku berdasarkan ID
        $row = Buku::findOrFail($id);
        $row ->delete();

        // Redirect setelah menghapus data
        return redirect('buku');
    }
}
