<?php

namespace App\Http\Controllers;
use App\Category ; 

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $params = [
            'categoryName' => $request->categoryName,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            ] ; 
            DB::table('categories')->insert($params) ;
            return redirect()->route('category.index') ;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}