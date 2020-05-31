<?php

namespace App\Http\Controllers\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Inscrits;
class InscritsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Inscrits $inscrit)
    {
        
        $inscrit->name=$request->name;
        $inscrit->email=$request->email;
        $inscrit->telephone=$request->telephone;
        $inscrit->questions=$request->questions;
        $inscrit->id_evenement=$request->id_evenement;
        $inscrit->id_client=Auth::id();
        $idi=Auth::id();
        $ide=$request->id_evenement;
        $evenements = DB::table('inscrits')->get();
        $idc=0;
        foreach($evenements as $e)
        {
            if($e->id_client==$idi and $e->id_evenement==$ide)
                {$idc=1;
               echo $ide;
                }
        }
     
        if($idc==1)
            {
                return view('client.evenements.inscription',['idi' => $idi],['ide' => $ide]);
            }
        else
       {
        $inscrit->save();
        return redirect()->route('client.evenements.index');
       } 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
