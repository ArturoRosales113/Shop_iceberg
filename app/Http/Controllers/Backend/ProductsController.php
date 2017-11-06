<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Supplier;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $prod = Product::all();
       return view('backend.products.products', ['prod' => $prod]); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sup = Supplier::pluck('supplier_name','id');
        // $cat = Category::pluck('category_name','id');
        $cat = Category::all();

        return view('backend.products.create', [
         'sup' => $sup,
         'cat' => $cat
        ]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
       $product = Product::create(Input::all());
       $product->save();
       $product->categories()->attach($request->categories[]);

       return redirect('manager/products');
      //
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
     $prod = Product::find($id);
     $sup = Supplier::pluck('supplier_name','id');
     // $cat = Category::pluck('category_name','id');
     $cat = Category::all();
     return view('backend.products.edit' , [
      'prod' => $prod,
      'sup' => $sup,
      'cat' => $cat
     ]); //
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
       $prod = Product::find($id);
       $prod->update($request->all());
       $prod->categories()->sync($request->categories);
       return redirect('/manager/products'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $prod = Product::find($id);
       $prod->destroy(); //
    }
}
