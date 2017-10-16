<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Towek;

class pemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = Towek::all();
         return view('paso.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('paso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new Towek;
        $var->distributor_id = $request->distributor_id;
        $var->buku_id = $request->buku_id;
        $var->jumlah = $request->jumlah;
        $var->tanggal = $request->tanggal;
        $var->save();
        return redirect('mula');
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
        $var = Towek::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('paso.edit')->with('var', $var);
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
           'distributor_id' => 'required', 'buku_id' => 'required',
        ]);
        
        $var = Towek::find($id);
        $var->distributor_id = $request->distributor_id;
        $var->buku_id = $request->buku_id;
        $var->jumlah = $request->jumlah;
        $var->tanggal = $request->tanggal;
        $var ->save();
        return redirect('mula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Towek::find($id);
        $var ->delete();
        return redirect('mula');
    }
}
