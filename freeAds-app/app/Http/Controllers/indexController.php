<?php

namespace App\Http\Controllers;

use App\Models\index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ads;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Annonces = Ads::latest()->get();
        // dd($Annonces);
        return view('showAds', compact('Annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('postAds');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('ads')->insert([
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'price'=> $_POST['price'],
            'img1'=> $_POST['img1'],
            'img2'=> $_POST['img2'],
            'localisation'=> $_POST['localisation'],
        ]);
        return redirect ('postAds');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(index $index)
    {
        return view('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(index $id)
    {
        $Annonces = DB::table('ads')
                    ->select('*')
                    ->where('id', '=', $id)
                    ->get();
        return view('editAds', ['Annonces' => $Annonces]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'localisation' => 'required'
        ]);
    
        Ads::whereId($id)->update($validatedData);

        return redirect('/Ads')->with('success', 'Annonce mise à jour avec succèss');
           
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Annonces = Ads::findOrFail($id);
        $Annonces->delete();

        return redirect('/Ads')->with('success', 'Annonce supprimée avec succèss');
    }
}
