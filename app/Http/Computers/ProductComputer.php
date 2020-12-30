<?php

namespace App\Http\Computers;

use Illuminate\Http\Request;

class ProductComputer extends Computer
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \DB::table('products')->get();
    }

    public function show($category_id)
    {
        return \DB::table('products')->where('category_id', $category_id)->get();
    }

   
    public function search($product_name)
    {

        // debug die and dump
        dd(request('product_name', 'null'));
        //
        // $product_name  = request('product_name');
        return \DB::table('products')
        ->where('name_ar','LIKE', "%".$product_name."%")
        ->orWhere('name_en', 'LIKE', "%".$product_name."%")
        ->get();
    }
}
