<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
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

    public function vista()
   {
    $products=products::all();
    return response()->json($products);   
   }

   ///funcion que permita añadir más registros.
   public function insertar(Request $request)
   {
        $prod=new products;
        $prod->name=$request->name;
        $prod->precio=$request->precio;
        $descripcion->descripcion=$request->descripcion;
        $prod->save();
        return 'Nuevo registro establecido';
   }

////funcion que permita mostrar los cierto rango de precios entre los productos con sus comentarios
   public function relacionPrecio(Request $request)
   {
       $products=DB::table('products')
       ->join('coments','coments.product_id','=','products.id')
       ->where('products.name','=',$request->name)
       ->and('products.precio')
       ->between($request->costo1)
       ->and($request->costo2)
       ->select('products.name','products.precio','coments.mensaje');
       return($products);      
   }
///eliminar registro de la tabla productos
   public function eliminar(Request $request)
   {
       $products=DB::table('products')
       ->join('coments','coments.product_id','=','products.id')
       ->where('products.name','=',$request->name)
       ->and('products.id','=','coments.product_id')
       ->delete();
       return 'Eliminacion de registros exitosa';      
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
