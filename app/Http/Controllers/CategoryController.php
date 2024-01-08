<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $category = Category::create([
            'name_cat' => $request->name_cat,
        ]);

        return redirect('/panel/category')->with('categoryStore', 'Data ditambah!');
    }
    
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        
        $category->delete();

        return redirect('/panel/category')->with('categoryDelete', 'Data berhasil dihapus!');
    }
    
    public function update(Request $request)
    {
        // dd($request->id);
        $category = Category::find($request->id);
        
        $category->name_cat = $request->name_cat;
        
        $category->save();
        return redirect('/panel/category')->with('categoryUpdate', 'Data berhasil diupdate!');
    }
}
