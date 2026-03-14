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

        $input = $request->all();

        if ($image = $request->file('imagen')) {
            $destinationPath = public_path('imagen/pokemon/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }

        pokemon::create($input);

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
            'tipo' => 'required',
            'categoria' => 'required',
            'habilidad' => 'required',
            'debilidad' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('imagen')) {
            $destinationPath = public_path('imagen/pokemon/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }else{
            unset($input['imagen']);
        }

        $pokemon->update($input);

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

    public function search($name)
    {
        $pokemon = pokemon::where('nombre', 'LIKE', $name)->first();

        if ($pokemon) {
            return response()->json([
                'found' => true,
                'data' => $pokemon
            ]);
        }

        return response()->json([
            'found' => false
        ], 404);
    }

    public function saveFromApi(Request $request)
    {
        $name = $request->input('nombre');
        $imageUrl = $request->input('imagen_url');
        
        // Descargar la imagen
        $imageContent = file_get_contents($imageUrl);
        $filename = time() . '_' . $name . '.png';
        $destinationPath = public_path('imagen/pokemon/' . $filename);
        file_put_contents($destinationPath, $imageContent);

        $pokemon = pokemon::create([
            'nombre' => $name,
            'imagen' => $filename,
            'tipo' => $request->input('tipo'),
            'categoria' => $request->input('categoria', 'Oficial'),
            'habilidad' => $request->input('habilidad'),
            'debilidad' => $request->input('debilidad', 'Desconocida'),
            'url' => $request->input('url', 'https://pokeapi.co/api/v2/pokemon/' . strtolower($name)),
        ]);

        return response()->json([
            'success' => true,
            'data' => $pokemon
        ]);
    }
}
