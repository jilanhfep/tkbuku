<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toweb;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = Toweb::all();
         return view('bukuk.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'no_isbn' => 'required', 'tahun' => 'required', 
        ]);
        
        $var = new Toweb;
        $var->no_isbn = $request->no_isbn;
        $var->judul = $request->judul;
        $var->penulis = $request->penulis;
        $var->penerbit = $request->penerbit;
        $var->tahun = $request->tahun;
        $var->stok = $request->stok;
        $var->harga_pokok = $request->harga_pokok;
        $var->harga_jual = $request->harga_jual;
        $var->ppn = $request->ppn;
        $var->diskon = $request->diskon;
        $var->save();
        return redirect('mai');
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
         $var = Toweb::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('bukuk.edit')->with('var', $var);
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
        $this->validate($request, [
           'no_isbn' => 'required', 'tahun' => 'required',
        ]);
        
        $var = Toweb::find($id);
        $var->no_isbn = $request->no_isbn;
        $var->judul = $request->judul;
        $var->penulis = $request->penulis;
        $var->penerbit = $request->penerbit;
        $var->tahun = $request->tahun;
        $var->stok = $request->stok;
        $var->harga_pokok = $request->harga_pokok;
        $var->harga_jual = $request->harga_jual;
        $var->ppn = $request->ppn;
        $var->diskon = $request->diskon;
        $var ->save();
        return redirect('mai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Toweb::find($id);
        $var ->delete();
        return redirect('mai');
    }
}
