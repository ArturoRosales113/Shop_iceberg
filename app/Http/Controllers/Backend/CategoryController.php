<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Category;
use File;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        return view('backend.categories.categories', ['cat' => $cat]); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        // 'category_name' => 'required|unique:products|max:255',
        // 'category_description' => 'required',
        // 'category_icon_path' => 'max:1024|required|image',
        // ]);
        // Crear Imagen
        $imgName = $request->category_name.'.'.$request->category_icon_path->getClientOriginalExtension();
        $request->category_icon_path->move(public_path('assets/categories'), $imgName);
        $category = Category::create();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_icon_path = 'assets/categories/'.$imgName;
        $category->save();

        return redirect('/manager/categories');


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
        $cat = Category::find($id);
        return view('backend.categories.edit',['cat' => $cat]);
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
        $cat = Category::find($id);
        if ($request->hasFile('category_icon_path'))
           {
            $file= $category->category_icon_path;
            $filename = public_path($file);
            File::delete($filename);
            $imgName = $request->category_name.'.'.$request->category_icon_path->getClientOriginalExtension();
            $request->category_icon_path->move(public_path('assets/categories'), $imgName);
           }
         $cat->category_name = $request->category_name;
         $cat->category_description = $request->category_description;
         $cat->save();
         return redirect('/manager/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $category = Category::find($id);
     $file= $category->category_icon_path;
     $filename = public_path($file);
     File::delete($filename);
     $category->delete();
      return redirect('/manager/categories');//
    }
}
