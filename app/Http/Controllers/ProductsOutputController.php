<?php

namespace App\Http\Controllers;

use App\Models\ProductsOutput;
use Illuminate\Http\Request;

/**
 * Class ProductsOutputController
 * @package App\Http\Controllers
 */
class ProductsOutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsOutputs = ProductsOutput::paginate();

        return view('products-output.index', compact('productsOutputs'))
            ->with('i', (request()->input('page', 1) - 1) * $productsOutputs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productsOutput = new ProductsOutput();
        return view('products-output.create', compact('productsOutput'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductsOutput::$rules);

        $productsOutput = ProductsOutput::create($request->all());

        return redirect()->route('products-outputs.index')
            ->with('success', 'ProductsOutput created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productsOutput = ProductsOutput::find($id);

        return view('products-output.show', compact('productsOutput'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productsOutput = ProductsOutput::find($id);

        return view('products-output.edit', compact('productsOutput'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductsOutput $productsOutput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsOutput $productsOutput)
    {
        request()->validate(ProductsOutput::$rules);

        $productsOutput->update($request->all());

        return redirect()->route('products-outputs.index')
            ->with('success', 'ProductsOutput updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productsOutput = ProductsOutput::find($id)->delete();

        return redirect()->route('products-outputs.index')
            ->with('success', 'ProductsOutput deleted successfully');
    }
}
