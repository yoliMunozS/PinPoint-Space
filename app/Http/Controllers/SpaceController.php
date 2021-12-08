<?php

namespace App\Http\Controllers;

use App\Models\Space;
use Illuminate\Http\Request;

/**
 * Class SpaceController
 * @package App\Http\Controllers
 */
class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Todos los espacios salvo los del usuario
        $spaces = Space::where('user_id', '!=', auth()->user()->id)->paginate();

        //Espacios del usuario logado
        $myspaces = Space::where('user_id', auth()->user()->id)->paginate();

        return view('space.index', compact('spaces','myspaces'))
            ->with('i', (request()->input('page', 1) - 1) * $spaces->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $space = new Space();
        return view('space.create', compact('space'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Space::$rules);

        //Aseguramos que la id es la del usuario logado
        $request->merge([
            'user_id' => auth()->id(),
        ]);

        $space = Space::create($request->all());

        return redirect()->route('spaces.index')
            ->with('success', 'Espacio creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $space = Space::find($id);

        return view('space.show', compact('space'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $space = Space::find($id);

        //Se verifica si el usuario es propietario del espacio
        if ($space->user_id == auth()->id()) {
            return view('space.edit', compact('space'));
        } else {
            return redirect()->route('spaces.index')
                ->with('failure', 'No eres propietario del espacio.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Space $space
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Space $space)
    {
        request()->validate(Space::$rules);

        $space = Space::find($request->id);

        if ($space->user_id == auth()->id()) {
            $space->update($request->all());

            return redirect()->route('spaces.index')
                ->with('success', 'Espacio actualizado con éxito.');
        } else {
            return redirect()->route('spaces.index')
                ->with('failure', 'No eres propietario del espacio.');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $space = Space::find($id);

        //Se verifica si el usuario es propietario del espacio
        if ($space->user_id == auth()->id()) {
            $space = Space::find($id)->delete();
            return redirect()->route('spaces.index')
                ->with('success', 'Espacio eliminado con éxito.');
        } else {
            return redirect()->route('spaces.index')
                ->with('failure', 'No eres propietario del espacio.');
        }
    }
}
