<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::select('id','title','parent_id');    
        if($request->input("parent_id")){
            $categories->where('parent_id',$request->input("parent_id"));
        }else if($request->query){
            $categories->where('parent_id','0');
        }
        $categories = $categories->get();
        return response()->json($categories);
    }

}