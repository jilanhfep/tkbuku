<?php

namespace App\Http\Controllers;

use App\buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = buku::paginate(1);
        return view('buku.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new buku;
        $var->judul = $request->judul;
        $var->noisbn = $request->noisbn;
        $var->penulis = $request->penulis;
        $var->penerbit = $request->penerbit;
        $var->tahun = $request->tahun;
        $var->stok = $request->stok;
        $var->harga_pokok = $request->harga_pokok;
        $var->harga_jual = $request->harga_jual;
        $var->ppn = $request->ppn;
        $var->diskon = $request->diskon;
        $var->save();
        return redirect('buku');
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
        $var = buku::find($id);
        if(!$var){
            abort(404);
        }
        return view('buku.edit')->with('var', $var);
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
        $var = buku::find($id);
        $var->judul = $request->judul;
        $var->noisbn = $request->noisbn;
        $var->penulis = $request->penulis;
        $var->penerbit = $request->penerbit;
        $var->tahun = $request->tahun;
        $var->stok = $request->stok;
        $var->harga_pokok = $request->harga_pokok;
        $var->harga_jual = $request->harga_jual;
        $var->ppn = $request->ppn;
        $var->diskon = $request->diskon;
        $var->save();
        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = buku::find($id);
        $var ->delete();
        return redirect('buku');
    }
}
