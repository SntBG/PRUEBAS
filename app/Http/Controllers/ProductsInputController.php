<?php

namespace App\Http\Controllers;

use App\Models\ProductsInput;
use Illuminate\Http\Request;

/**
 * Class ProductsInputController
 * @package App\Http\Controllers
 */
class ProductsInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsInputs = ProductsInput::paginate();

        return view('products-input.index', compact('productsInputs'))
            ->with('i', (request()->input('page', 1) - 1) * $productsInputs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productsInput = new ProductsInput();
        return view('products-input.create', compact('productsInput'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductsInput::$rules);

        $productsInput = ProductsInput::create($request->all());

        return redirect()->route('products-inputs.index')
            ->with('success', 'ProductsInput created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productsInput = ProductsInput::find($id);

        return view('products-input.show', compact('productsInput'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productsInput = ProductsInput::find($id);

        return view('products-input.edit', compact('productsInput'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductsInput $productsInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsInput $productsInput)
    {
        request()->validate(ProductsInput::$rules);

        $productsInput->update($request->all());

        return redirect()->route('products-inputs.index')
            ->with('success', 'ProductsInput updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productsInput = ProductsInput::find($id)->delete();

        return redirect()->route('products-inputs.index')
            ->with('success', 'ProductsInput deleted successfully');
    }
}
