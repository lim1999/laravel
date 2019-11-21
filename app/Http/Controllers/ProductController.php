<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $create = \App\Models\Product::create([ 'name' => 'dara', 'rent_price' => '100', 'list_price' => '120','sole_price'=>'140']);
       // $product = \App\Models\Product::find($create->id);
        // return response()->json([
        //     'name'=>$product->name,
        // ]);
        // DB::table('products')->insert([
        //     'name' => 'dara', 
        //     'rent_price' => '100', 
        //     'list_price' => '120',
        //     'sole_price'=>'140',
        // ]);
        

        $data=Product::latest()->get();
        // return response()->json($data);
            return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('product.createForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $create=Product::create($request->all());
        $product=new Product();
        $product->name=$request->input('txt_name');
        $product->rent_price=$request->input('txt_rent_price');
        $product->list_price=$request->input('txt_list_price');
        $product->sale_price=$request->input('txt_sale_price');
        $product->sold_price=$request->input('txt_sold_price');
        $product->save();
        return redirect('/products');
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
