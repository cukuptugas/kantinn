<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    /**
     * Menampilkan daftar data penjual.
     */
    public function index()
    {
        $data['seller'] =Seller::paginate(5);
        $data['judul'] = 'Data Penjual';
        return view('seller_index', $data);
    }

    /**
     * Menampilkan formulir untuk membuat penjual baru.
     */
    public function create()    
    {
        $data['seller'] = new Seller();
        $data['route'] = 'seller.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Penjual';
        return view('seller_form', $data);
    }

    /**
     * Menyimpan data penjual yang baru dibuat.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_warung' => 'required',
            'deskripsi' => 'required',
        ]);

        $seller = new Seller();
        $seller->fill($validatedData);
        $seller->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Menampilkan detail penjual.
     */
    public function show($id)
    {
        $data['seller'] = Seller::findOrFail($id);
        $data['judul'] = 'Detail Penjual';
        return view('seller_detail', $data);
    }

    /**
     * Menampilkan formulir untuk mengedit data penjual.
     */
    public function edit($id)
    {
        $data['seller'] = Seller::findOrFail($id);
        $data['route'] = ['seller.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data Penjual';

        return view('seller_form', $data);
    }

    /**
     * Memperbarui data penjual yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_warung' => 'required',
            'deskripsi' => 'required',
        ]);

        $seller = Seller::findOrFail($id);
        $seller->fill($validatedData);
        $seller->save();

        flash('Data berhasil diubah');
        return redirect()->route('seller.index');
    }

    /**
     * Menghapus data penjual.
     */
    public function destroy($id)
    {
        $seller = Seller::findOrFail($id);
        $seller->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
