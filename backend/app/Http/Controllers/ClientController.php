<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Client::all();

        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
public function store(Request $request)
{

    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'pseudo' => 'required',
        'statut' => 'required',
        'Emplacement' => 'required',
        'Telephone' => 'required',
    ]);

    $client = Client::create($validatedData);

    return redirect('/clients')->with('success', 'Client créer avec succèss');
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
        $client = Client::findOrFail($id);

    return view('edit', compact('client'));
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
        $validatedData = $request->validate([
            'nom' => 'required',
        'prenom' => 'required',
        'pseudo' => 'required',
        'statut' => 'required',
        'Emplacement' => 'required',
        'Telephone' => 'required'
        ]);
    
        Client::whereId($id)->update($validatedData);
    
        return redirect('/clients')->with('success', 'CLIENT mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
    
        return redirect('/clients')->with('success', 'Client supprimer avec succèss');
    }
}
