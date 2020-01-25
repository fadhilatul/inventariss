<?php

namespace App\Http\Controllers;

use App\Inventaris;
use Auth;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['inventaris'] = Inventaris::orderBy('kode_barang','asc')->get();
        $data['row'] = 1;

        return view('inventaris.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $inventaris = new Inventaris;
        $inventaris->kode_barang = $req->kode_barang;
        $inventaris->name = $req->name;
        $inventaris->tanggal = $req->tanggal;
        $inventaris->kondisi = $req->kondisi;
        $inventaris->jumlah = $req->jumlah;
        $inventaris->user_id = Auth::id();
        $inventaris->save();

        return redirect('inventaris');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['inventaris'] = Inventaris::find($id);
        return view('inventaris.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->kode_barang = $req->kode_barang;
        $inventaris->name = $req->name;
        $inventaris->tanggal = $req->tanggal;
        $inventaris->kondisi = $req->kondisi;
        $inventaris->jumlah = $req->jumlah;
        $inventaris->save();

        return redirect('inventaris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->delete();

        return redirect('inventaris');
    }
}
