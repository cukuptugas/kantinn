<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Menampilkan daftar kelas.
     */
    public function index()
    {
        $data['kelas'] = Kelas::paginate(5);
        $data['judul'] = 'Data Kelas';
        return view('kelas_index', $data);
    }

    /**
     * Menampilkan formulir untuk menambahkan kelas baru.
     */
    public function create()
    {
        $data['kelas'] = new Kelas();
        $data['route'] = 'kelas.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Kelas';
        return view('kelas_form', $data);
    }

    /**
     * Menyimpan kelas yang baru dibuat ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'nama_kelas' => 'required',
        ]);

        $kelas = new Kelas();
        $kelas->fill($validatedData);
        $kelas->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Menampilkan kelas yang spesifik.
     */
    public function show()
    {
        $data['kelas'] = Kelas::all();
        $data['judul']  = 'Laporan Data Kelas';
        return view('kelas_laporan', $data);
    }

    /**
     * Menampilkan formulir untuk mengedit kelas yang spesifik.
     */
    public function edit($id)
    {
        $data['kelas']  = Kelas::findOrFail($id);
        $data['route']   = ['kelas.update', $id];
        $data['method']  = 'put';
        $data['tombol']  = 'Update';
        $data['judul']   = 'Edit Data Kelas';

        return view('kelas_form', $data);
    }

    /**
     * Memperbarui kelas yang spesifik di dalam penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'nama_kelas' => 'required',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->fill($validatedData);
        $kelas->save();

        flash('Data berhasil diubah');
        return redirect()->route('kelas.index');
    }

    /**
     * Menghapus kelas yang spesifik dari penyimpanan.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
