<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_price_histoires;
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
        

        $product=Product::latest()->get();
            return view('product.index',compact('product'));
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
        // save into products table
        $product = Product::create($request->all());
        // save into product_price_histories
        $product_history             = new Product_price_histoires();
        $product_history->rent_price = $product->rent_price;
        $product_history->list_price = $product->list_price;
        $product_history->sale_price = $product->sale_price;
        $product_history->sold_price = $product->sold_price;
        $product_history->product_id = $product->id;
        $product_history->save();
        return redirect('products')->with('success', 'Data Added successfully.');
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
        $product=Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
        $product->update($request->only([
            'name', 
            'rent_price',
            'list_price',
            'sale_price',
            'sold_price',   
        ]));
        // dd($request->all());
        $product->product_price_histories()->create([
            'rent_price', 'rent_price',
            'list_price', 'list_price',
            'sale_price', 'sale_price',
            'sold_price', 'sold_price',
        ]);
        return redirect('products')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
