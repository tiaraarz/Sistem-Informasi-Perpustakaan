<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Peminjam::all();
        return view('peminjam.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Peminjam::create([
            'nama_peminjam' => $request->nama_peminjam,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        return redirect('peminjam');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $row = Peminjam::findOrFail($id);
        return view('peminjam.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_peminjam'=>'bail|required',
                'alamat'=>'required',
               'nomor_hp' =>'required',
                'email'=>'required',
                'tanggal_lahir'=>'required',
                'jenis_kelamin'=>'required'

            ],
            [
                'nama_peminjam.required'=>'wajib diisi',
                'alamat.required'=>'wajib diisi',
                'nomor_hp.required'=>'wajib diisi',
                'email.required'=>'wajib diisi',
                'tanggal_lahir.required'=>'wajib diisi',
                'jenis_kelamin.required'=>'wajib diisi'
            ]
            );

            $row = Peminjam::findOrFail($id);
            $row->update([
                'nama_peminjam' => $request->nama_peminjam,
                'alamat' => $request->alamat,
                'nomor_hp' => $request->nomor_hp,
                'email' => $request->email,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin
            ]);

            return redirect('peminjam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Peminjam::findOrFail($id);
        $row->delete();

        return redirect('peminjam');
    }
}
