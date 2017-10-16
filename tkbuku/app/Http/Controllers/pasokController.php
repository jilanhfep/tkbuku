<?php

namespace App\Http\Controllers;

use App\pasok;
use Illuminate\Http\Request;

class pasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = pasok::paginate(1);
        return view('pasok.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new pasok;
        $var->id_distributor = $request->id_distributor;
        $var->id_buku = $request->id_buku;
        $var->jumlah = $request->jumlah;
        $var->tanggal = $request->tanggal;

        $var->save();
        return redirect('pasok');
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
        $var = pasok::find($id);
        if(!$var){
            abort(404);
        }
        return view('pasok.edit')->with('var', $var);
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
        $var = pasok::find($id);
        $var->id_distributor = $request->id_distributor;
        $var->id_buku = $request->id_buku;
        $var->jumlah = $request->jumlah;
        $var->tanggal = $request->tanggal;
        $var->save();
        return redirect('pasok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = pasok::find($id);
        $var ->delete();
        return redirect('pasok');
    }
}
