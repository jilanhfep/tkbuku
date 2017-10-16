<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = Tower::all();
         return view('hangar.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hangar.create');
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
           'buku_id' => 'required', 'kasir_id' => 'required', 
        ]);
        
        $var = new Tower;
        $var->buku_id = $request->buku_id;
        $var->kasir_id = $request->kasir_id;
        $var->jumlah = $request->jumlah;
        $var->total = $request->total;
        $var->tanggal = $request->tanggal;
        $var->save();
        return redirect('main');
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
        $var = Tower::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('hangar.edit')->with('var', $var);
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
           'buku_id' => 'required', 'kasir_id' => 'required',
        ]);
        
        $var = Tower::find($id);
        $var ->buku_id = $request->buku_id;
        $var->kasir_id = $request->kasir_id;
        $var->jumlah = $request->jumlah;
        $var->total = $request->total;
        $var->tanggal = $request->tanggal;
        $var ->save();
        return redirect('main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy($id)
    {
        $var = Tower::find($id);
        $var ->delete();
        return redirect('main');
    }
}
