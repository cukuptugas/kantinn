<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['order'] = Order::paginate(5);
        $data['judul'] = 'Data Order';
        return view('order_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['order'] = new Order();
        $data['route'] = 'order.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Order';
        return view('order_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'seller_id' => 'required',
            'items' => 'required',
            'total' => 'required',
            'pesan' => 'required',
            'buyer' => 'required',
        ]);

        $order = new Order();
        $order->fill($validatedData);
        $order->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['order'] = Order::all();
        $data['judul']  = 'Laporan Data Order';
        return view('order_laporan', $data);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['order']  = Order::findOrFail($id);
        $data['route']   = ['order.update', $id];
        $data['method']  = 'put';
        $data['tombol']  = 'Update';
        $data['judul']   = 'Edit Data Order';
        
        return view('order_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'seller_id' => 'required',  
            'items' => 'required',
            'total' => 'required',
            'pesan' => 'required',
            'buyer' => 'required',
        ]);

        $order = Order::findOrFail($id);
        $order->fill($validatedData);
        $order->save();

        flash('Data berhasil diubah');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
