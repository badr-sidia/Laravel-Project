<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = DB::table('evenements')->get();
        $categories = DB::table('categories')->get();
        
        return view('client.evenements.index', ['evenements' => $evenements],['categories' => $categories]);
        
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
    public function store(Request $request)
    {
        
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
        
        //$evenements = DB::table('evenements')->find($id);
        $evenements= DB::table('evenements')->where(['category_id'=>$id])->paginate(3);
       $category=DB::table('categories')->where(['id'=>$id])->get();
      
    return view('client.evenements.listes', ['evenements' => $evenements],['id' => $id]);
       /* $c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title,description FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }*/
        
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
