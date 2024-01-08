<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fitur;
use Illuminate\Http\RedirectResponse;

class FiturController extends Controller
{
    public function store(Request $request)
    {
        $fitur = Fitur::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return redirect('/panel/fitur')->with('fiturStore', 'Data ditambah!');
    }
    
    public function delete(Request $request)
    {
        $fitur = Fitur::find($request->id);
        
        $fitur->delete();

        return redirect('/panel/fitur')->with('fiturDelete', 'Data berhasil dihapus!');
    }
    
    public function update(Request $request)
    {
        // dd($request->id);
        $fitur = Fitur::find($request->id);
        
        $fitur->name = $request->name;
        $fitur->category_id = $request->category_id;
        
        $fitur->save();
        return redirect('/panel/fitur')->with('fiturUpdate', 'Data berhasil diupdate!');
    }
}
