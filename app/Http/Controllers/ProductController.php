<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['product'] = Product::paginate(5);
        $data['judul'] = 'Data Produk';
        return view('product_index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['product'] = new Product();
        $data['route'] = 'product.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Produk';
        return view('product_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
            'stok' => 'required',
        ]);

        $product = new Product();
        $product->fill($validatedData);
        $product->save();

        flash('Data berhasil disimpan');
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['product'] = Product::all();
        $data['judul']  = 'Laporan Data Produk';
        return view('product_laporan', $data);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['product']  = Product::findOrFail($id);
        $data['route']   = ['product.update', $id];
        $data['method']  = 'put';
        $data['tombol']  = 'Update';
        $data['judul']   = 'Edit Data Produk';

        return view('product_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
            'stok' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->fill($validatedData);
        $product->save();

        flash('Data berhasil diubah');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
