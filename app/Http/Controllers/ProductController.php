<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(){
        return view('products.index');
        
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
      /*  dd($request 
    );*/
$data=$request->validate([
    'name'=>'required',
    'qte'=>'required|numeric',
    'price'=>'required|decimal:2',
    'description'=>'nullable'
]);
$newProduct=Product::create($data);
return redirect(route('products.index'));
    }
}
