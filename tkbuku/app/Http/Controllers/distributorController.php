<?php

namespace App\Http\Controllers;

use App\distributor;
use Illuminate\Http\Request;

class distributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $vars = distributor::paginate(1);
        return view('distributor.index',['var' => $vars]);
    }

    public function search(){
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $var = new distributor;
        $var->nama_distributor = $request->nama_distributor;
        $var->telepon = $request->telepon;
        $var->alamat = $request->alamat;
        $var->save();
        return redirect('distributor');
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
        $var = distributor::find($id);
        if(!$var){
            abort(404);
        }
        return view('distributor.edit')->with('var', $var);
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
        $var = distributor::find($id);
        $var->nama_distributor = $request->nama_distributor;
        $var->telepon = $request->telepon;
        $var->alamat = $request->alamat;
        $var->save();
        return redirect('distributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = distributor::find($id);
        $var ->delete();
        return redirect('distributor');
    }
}
