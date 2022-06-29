<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pokemon;
use Illuminate\Support\Facades\Storage;

class pokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = pokemon::all();

        return view('Administrador.index',compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'tipo' => 'required',
            'categoria' => 'required',
            'habilidad' => 'required',
            'debilidad' => 'required',
        ]);

        //$imagen = $request -> file('imagen');
       // $nombre = time().'.'.$imagen->getClientOriginalExtension();
        //$destino = storage_path.'app\imagen\pokemon/'.;
       // $request->imagen->move($destino, $nombre);

        $imagenes = $request->file('imagen')->store('public/images/pokemon');
        $url = Storage::url($imagenes);
        //pokemon::create([
            //'url'=>$url
        //]);

        pokemon::create($request->all());

        return redirect()->route('pokemon.index')->with('success','Pokemon creado satisfactoriamente.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pokemon $pokemon)
    {
        return view('Administrador.show',compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pokemon $pokemon)
    {
        return view('Administrador.edit',compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,pokemon $pokemon)
    {
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'tipo' => 'required',
            'categoria' => 'required',
            'habilidad' => 'required',
            'debilidad' => 'required',
        ]);

        $imagen = $request -> file('image');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('storage/pokemon');
        $request->imagen->move($destino, $nombre);

        $pokemon->update($request->all());

        return redirect()->route('pokemon.index')->with('success','Pokemon actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pokemon $pokemon)
    {
        $pokemon->delete();

         return redirect()->route('pokemon.index')
                         ->with('success','pokemon borrado correctamente');
    }
}
