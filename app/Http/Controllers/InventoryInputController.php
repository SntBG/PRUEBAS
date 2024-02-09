<?php

namespace App\Http\Controllers;

use App\Models\InventoryInput;
use Illuminate\Http\Request;

/**
 * Class InventoryInputController
 * @package App\Http\Controllers
 */
class InventoryInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventoryInputs = InventoryInput::paginate();

        return view('inventory-input.index', compact('inventoryInputs'))
            ->with('i', (request()->input('page', 1) - 1) * $inventoryInputs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventoryInput = new InventoryInput();
        return view('inventory-input.create', compact('inventoryInput'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InventoryInput::$rules);

        $inventoryInput = InventoryInput::create($request->all());

        return redirect()->route('inventory-inputs.index')
            ->with('success', 'InventoryInput created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventoryInput = InventoryInput::find($id);

        return view('inventory-input.show', compact('inventoryInput'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventoryInput = InventoryInput::find($id);

        return view('inventory-input.edit', compact('inventoryInput'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InventoryInput $inventoryInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryInput $inventoryInput)
    {
        request()->validate(InventoryInput::$rules);

        $inventoryInput->update($request->all());

        return redirect()->route('inventory-inputs.index')
            ->with('success', 'InventoryInput updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventoryInput = InventoryInput::find($id)->delete();

        return redirect()->route('inventory-inputs.index')
            ->with('success', 'InventoryInput deleted successfully');
    }
}
