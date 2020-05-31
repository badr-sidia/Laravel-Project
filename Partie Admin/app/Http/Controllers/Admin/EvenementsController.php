<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Evenements;
class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arr['evenements']=Evenements::paginate(5);
       return view('admin.evenements.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['categories']=Category::all();
        return view('admin.evenements.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Evenements $evenements)
    {
        if($request->image->getClientOriginalName())
        {
        $ext=$request->image->getClientOriginalExtension();
        $file=date('YmdHis').rand(1,99999).'.'.$ext;
        $request->image->storeAs('public/evenements',$file);
        }
        else
        {
        $file='';
        }
        $evenements->category_id=$request->category_id;
 $evenements->image=$file;
        $evenements->title=$request->title;
        $evenements->author=$request->author;
        $evenements->description=$request->description;
       $evenements->save();
        return redirect()->route('admin.evenements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscrits = DB::table('inscrits')->where('id_evenement', '=', $id)->paginate(5);
        return view('admin.evenements.inscrit',['inscrits'=>$inscrits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$arr['evenements']=$evenements;*/
        $arr['categories']=Category::all();
        $evenements = DB::table('evenements')->find($id);
        return view('admin.evenements.edit',['evenements' => $evenements])->with($arr);
        /*return view('admin.evenements.edit')->with($arr);*/
        
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


        $evenements = DB::table('evenements')->find($id);
        if(isset($request->image)&& $request->image->getClientOriginalName())
        {
        $ext=$request->image->getClientOriginalExtension();
        $file=date('YmdHis').rand(1,99999).'.'.$ext;
        $request->image->storeAs('public/evenements',$file);
        }
        else
        {
            if(!$evenements->image)
                $file='';
            else
                $file=$evenements->image;
        }
        /*$evenements->category_id=$request->category_id;
        $evenements->image=$file;
        $evenements->title=$request->title;
        $evenements->author=$request->author;
        $evenements->description=$request->description;
        /*$evenements->save();*/
        $affected = DB::table('evenements')
              ->where('id', $id)
              ->update(['category_id' => $request->category_id,'image' => $file,'title' => $file,'title' => $request->title,'author' => $request->author,'description' => $request->description]);
        return redirect()->route('admin.evenements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evenements::destroy($id);
        return redirect()->route('admin.evenements.index');
    }
}
