<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Towel;

class distributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = Towel::all();
         return view('distri.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distri.create');
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
           'nama_distributor' => 'required', 'alamat' => 'required', 
        ]);
        
        $var = new Towel;
        $var->nama_distributor = $request->nama_distributor;
        $var->alamat = $request->alamat;
        $var->telepon = $request->telepon;
        $var->save();
        return redirect('mulai');
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
        $var = Towel::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('distri.edit')->with('var', $var);
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
           'nama_distributor' => 'required', 'alamat' => 'required',
        ]);
        
        $var = Towel::find($id);
        $var->nama_distributor = $request->nama_distributor;
        $var->alamat = $request->alamat;
        $var->telepon = $request->telepon;
        $var ->save();
        return redirect('mulai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = Towel::find($id);
        $var ->delete();
        return redirect('mulai');
    }
}
