<?php

namespace App\Http\Controllers;

use App\penjualan;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $vars = penjualan::paginate(1);
        return view('penjualan.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new penjualan;
        $var->id_kasir = $request->id_kasir;
        $var->id_buku = $request->id_buku;
        $var->jumlah = $request->jumlah;
        $var->total = $request->total;
        $var->tanggal = $request->tanggal;

        $var->save();
        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = penjualan::find($id);
        if(!$var){
            abort(404);
        }
        return view('penjualan.edit')->with('var', $var);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $var = penjualan::find($id);
        $var->id_kasir = $request->id_kasir;
        $var->id_buku = $request->id_buku;
        $var->jumlah = $request->jumlah;
        $var->total = $request->total;
        $var->tanggal = $request->tanggal;

        $var->save();
        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = penjualan::find($id);
        $var ->delete();
        return redirect('penjualan');
    }
}
