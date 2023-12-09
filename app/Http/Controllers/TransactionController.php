<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['transaction'] = Transaction::paginate(5);
        $data['judul'] = 'Data Transaksi';
        return view('transaction_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['transaction'] = new Transaction();
        $data['route'] = 'transaction.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Transaksi';
        return view('transaction_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user' => 'required',
            'seller' => 'required',
            'order' => 'required',
        ]);

        $transaction = new Transaction();
        $transaction->fill($validatedData);
        $transaction->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['transaction'] = Transaction::all();
        $data['judul']  = 'Laporan Data Transaksi';
        return view('transaction_laporan', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['transaction']  = Transaction::findOrFail($id);
        $data['route']   = ['transaction.update', $id];
        $data['method']  = 'put';
        $data['tombol']  = 'Update';
        $data['judul']   = 'Edit Data Transaksi';

        return view('transaction_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'user' => 'required',
            'seller' => 'required',
            'order' => 'required',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->fill($validatedData);
        $transaction->save();

        flash('Data berhasil diubah');
        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
