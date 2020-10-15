<?php

namespace App\Http\Controllers;

use App\coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // public function index()
    //{
     // $inicio=coment::all()->toArray();
     //return view('welcome',["inicio"=>$inicio]);
       
  // }


   public function vista()
   {
    $coments=coment::all();
    return response()->json($coments);   
   }


///funcion que permita añadir más registros.
    public function insertar(Request $request)
    {
         $coments=new coment;
         $coments->mensaje=$request->mensaje;
         $coments->product_id=$request->id;
         $coments->save();
         return 'Nuevo registro establecido';
    }

////funcion que permita mostrar la relación de a que producto se le esta comentando
    public function relacion(Request $request)
    {
        $coments=DB::table('coments')
        ->join('products','coments.product_id','=','products.id')
        ->where('products.name','=',$request->name)
        ->select('products.name','coments.mensaje','products.precio')
        ->get();
        return($coments);      
    }

    ///eliminar registro de la tabla productos
    public function eliminar(Request $request)
    {
        $coments=DB::table('coments')
        ->from('coments')
        ->where('coments.id','=',$request->id)
        ->delete();
        return 'Eliminacion de registros exitosa';       
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // public function create()
   // {
        //
   // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(coment $coment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(coment $coment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coment $coment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(coment $coment)
    {
        //
    }
}
