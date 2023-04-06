<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProjetController extends Controller
{

    public function view()
    {
        $projets = Projet::all();
        return view('welcome', ['projets' => $projets]);
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projet.index', ['projets' => $projets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('projet.create', ['titre' => 'Ajout d\'un projet']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nom' => 'required',
                'description' => 'required',
                'tags'
            ]
        );

        $projet = new Projet;

        $projet->nom = $request->nom;
        $projet->description = $request->description;
        if (isset($request->tags)){
            $projet->tags()->sync($request->tags);
        }
        $projet->save();

        return redirect()->route('projets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projet.show', ['projet' => $projet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $projet = Projet::find($id);
        return view('projet.edit', ['projet' => $projet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nom',
                'description',
                'tags'
            ]
        );

        $projet = Projet::find($id);

        $projet->nom = $request->nom;
        $projet->description = $request->description;
        if (isset($request->tags)) {
            $projet->tags()->sync($request->tags);
        }
        $projet->save();

        return redirect()->route('projets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
