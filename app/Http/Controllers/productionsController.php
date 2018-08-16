<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productionsController extends Controller
{
    public function productsList()
    {
        $products = Product::all();
        return view('clients.productsList',compact('products'));
    }

    public function productPage($id)
    {
        $product = Product::where('id','=',$id)->get();
        return view('clients.productsPage',compact('product'));
//        return $product;
    }

    public function productsOrderByCat()
    {

    }


}
