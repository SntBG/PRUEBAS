<?php

namespace App\Http\Controllers;

use App\Models\InventoryOutput;
use Illuminate\Http\Request;

/**
 * Class InventoryOutputController
 * @package App\Http\Controllers
 */
class InventoryOutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventoryOutputs = InventoryOutput::paginate();

        return view('inventory-output.index', compact('inventoryOutputs'))
            ->with('i', (request()->input('page', 1) - 1) * $inventoryOutputs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventoryOutput = new InventoryOutput();
        return view('inventory-output.create', compact('inventoryOutput'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InventoryOutput::$rules);

        $inventoryOutput = InventoryOutput::create($request->all());

        return redirect()->route('inventory-outputs.index')
            ->with('success', 'InventoryOutput created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventoryOutput = InventoryOutput::find($id);

        return view('inventory-output.show', compact('inventoryOutput'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventoryOutput = InventoryOutput::find($id);

        return view('inventory-output.edit', compact('inventoryOutput'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InventoryOutput $inventoryOutput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryOutput $inventoryOutput)
    {
        request()->validate(InventoryOutput::$rules);

        $inventoryOutput->update($request->all());

        return redirect()->route('inventory-outputs.index')
            ->with('success', 'InventoryOutput updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventoryOutput = InventoryOutput::find($id)->delete();

        return redirect()->route('inventory-outputs.index')
            ->with('success', 'InventoryOutput deleted successfully');
    }
}
