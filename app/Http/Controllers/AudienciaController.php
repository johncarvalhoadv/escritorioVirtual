<?php

namespace App\Http\Controllers;

use App\Models\Audiencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AudienciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AudienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $audiencias = Audiencia::paginate();

        return view('audiencia.index', compact('audiencias'))
            ->with('i', ($request->input('page', 1) - 1) * $audiencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $audiencia = new Audiencia();

        return view('audiencia.create', compact('audiencia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AudienciaRequest $request): RedirectResponse
    {
        Audiencia::create($request->validated());

        return Redirect::route('audiencias.index')
            ->with('success', 'Audiencia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $audiencia = Audiencia::find($id);

        return view('audiencia.show', compact('audiencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $audiencia = Audiencia::find($id);

        return view('audiencia.edit', compact('audiencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AudienciaRequest $request, Audiencia $audiencia): RedirectResponse
    {
        $audiencia->update($request->validated());

        return Redirect::route('audiencias.index')
            ->with('success', 'Audiencia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Audiencia::find($id)->delete();

        return Redirect::route('audiencias.index')
            ->with('success', 'Audiencia deleted successfully');
    }
}
