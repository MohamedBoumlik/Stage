<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cat = Categories::all();
        // return response()->json($cat);
        $cat = Categories::all();
        return view('backend.categories.index', compact('cat'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Categories;
        $cat->type=$request->type;
        $cat->save();
        
        return redirect()->back()->with('addCat','Catégorie ajouté avec succès');
    }

    public function edit($id){

        $cat = Categories::findOrFail($id);
        return view('backend.categories.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Categories::findOrFail($id);
        $cat->type=$request->type;
        $cat->save();
        return redirect('/categorie')->with('editCat','Catégorie bien modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($id)
    {
        $cat = Categories::findOrFail($id);
        Categories::destroy($id);
        return redirect()->back()->with(' ','Catégorie supprimé');
    }




}
