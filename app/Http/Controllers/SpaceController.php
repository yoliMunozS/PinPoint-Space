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
        $spaces = Space::paginate();

        return view('space.index', compact('spaces'))
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

        $space = Space::create($request->all());

        return redirect()->route('spaces.index')
            ->with('success', 'Space created successfully.');
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

        return view('space.edit', compact('space'));
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

        $space->update($request->all());

        return redirect()->route('spaces.index')
            ->with('success', 'Space updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $space = Space::find($id)->delete();

        return redirect()->route('spaces.index')
            ->with('success', 'Space deleted successfully');
    }
}
