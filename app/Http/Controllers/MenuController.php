<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menu'] = \App\Models\Menu::paginate(5);
        $data['judul'] = 'Data-Data menu';
        return view('menu_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['menu'] = new \App\Models\Dokter();
        $data['route'] = 'menu.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Menu';

        return view('menu_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'kode_menu' => 'required|unique:menus,kode_menu,' . $id,
            'nama_menu' => 'required', 
            'deskripsi' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
        ]);
        $menu = new \App\Models\Menu();
        $menu->fill($validasiData);
        $menu->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['menu'] = \App\Models\Menu::all();
        $data['judul']  = 'Laporan Data menu';
        return view('menu_laporan',$data);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['menu']  = \App\Models\Menu::findOrFail($id);
        $data['route']   = ['menu.update',$id];
        $data['method']  = 'put';
        $data['tombol']  = 'Update';
        $data['judul']   = 'Edit Data menu';
        
        return view('menu_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'kode_menu' => 'required|unique:menus,kode_menu,' . $id,
            'nama_menu' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);
        $menu= \App\Models\Menu::findOrFail($id);
        $menu->fill($validasiData);
        $menu->save();

        flash('Data berhasil diubah');
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = \App\Models\Menu::findOrfail($id);
        $menu->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
