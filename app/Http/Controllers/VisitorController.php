<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['visitor'] = Visitor::paginate(5);
        $data['judul'] = 'Data Visitor';
        return view('visitor_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['visitor'] = new Visitor();
        $data['route'] = 'visitor.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Visitor';
        return view('visitor_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
        ]);

        $visitor = new Visitor();
        $visitor->fill($validatedData);
        $visitor->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['visitor'] = Visitor::all();
        $data['judul']  = 'Laporan Data Visitor';
        return view('visitor_laporan', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['visitor']  = Visitor::findOrFail($id);
        $data['route']   = ['visitor.update', $id];
        $data['method']  = 'put';
        $data['tombol']  = 'Update';
        $data['judul']   = 'Edit Data Visitor';

        return view('visitor_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
        ]);

        $visitor = Visitor::findOrFail($id);
        $visitor->fill($validatedData);
        $visitor->save();

        flash('Data berhasil diubah');
        return redirect()->route('visitor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visitor = Visitor::findOrFail($id);
        $visitor->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
