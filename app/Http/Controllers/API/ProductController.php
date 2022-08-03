<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $products = Product::select('id','name','description','category');    
           
        if($request->input("category")){
            $products->where('category',$request->input("category"));
        }
        $products = $products->get();
        $products->map(function($product) use($products){
            $product['category_name'] = $product->getProductCategory->title;
        }); 
        return response()->json($products);
    }
}
