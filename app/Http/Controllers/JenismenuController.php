<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenismenu;

class JenismenuController extends Controller
{
    /**
     * Menampilkan daftar jenis menu.
     */
    public function index()
    {
        $data['jenismenu'] = Jenismenu::paginate(5);
        $data['judul'] = 'Data Jenis Menu';
        return view('jenismenu_index', $data); // Sesuaikan dengan nama file blade yang Anda miliki
    }

    /**
     * Menampilkan formulir untuk menambahkan jenis menu baru.
     */
    public function create()
    {
        $data['jenismenu'] = new Jenismenu();
        $data['route'] = 'jenismenu.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Jenis Menu';
        return view('jenismenu_form', $data); // Sesuaikan dengan nama file blade yang Anda miliki
    }

    /**
     * Menyimpan jenis menu yang baru dibuat ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'jenismenu' => 'required',
        ]);

        $jenismenu = new Jenismenu();
        $jenismenu->fill($validatedData);
        $jenismenu->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Menampilkan jenis menu yang spesifik.
     */
    public function show($id)
    {
        $data['jenismenu'] = Jenismenu::findOrFail($id);
        $data['judul'] = 'Detail Jenis Menu';
        return view('jenismenu_detail', $data); // Sesuaikan dengan nama file blade yang Anda miliki
    }

    /**
     * Menampilkan formulir untuk mengedit jenis menu yang spesifik.
     */
    public function edit($id)
    {
        $data['jenismenu'] = Jenismenu::findOrFail($id);
        $data['route'] = ['jenismenu.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data Jenis Menu';

        return view('jenismenu_form', $data); // Sesuaikan dengan nama file blade yang Anda miliki
    }

    /**
     * Memperbarui jenis menu yang spesifik di dalam penyimpanan.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'jenismenu' => 'required',
        ]);

        $jenismenu = Jenismenu::findOrFail($id);
        $jenismenu->fill($validatedData);
        $jenismenu->save();

        flash('Data berhasil diubah');
        return redirect()->route('jenismenu.index'); // Sesuaikan dengan nama route yang Anda miliki
    }

    /**
     * Menghapus jenis menu yang spesifik dari penyimpanan.
     */
    public function destroy($id)
    {
        $jenismenu = Jenismenu::findOrFail($id);
        $jenismenu->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
