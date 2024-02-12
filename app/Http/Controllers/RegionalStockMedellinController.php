<?php

namespace App\Http\Controllers;

use App\Models\RegionalStock;
use Illuminate\Http\Request;
use App\Models\Product;
/**
 * Class RegionalStockMedellinController
 * @package App\Http\Controllers
 */
class RegionalStockMedellinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionalStocks = RegionalStock::paginate();

        return view('regional-stock.regional-medellin.index', compact('regionalStocks'))
            ->with('i', (request()->input('page', 1) - 1) * $regionalStocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regionalStock = new RegionalStock();
        $products = Product::pluck('product','id');
        return view('regional-stock.regional-medellin.create', compact('regionalStock','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegionalStock::$rules);

        $regionalStock = RegionalStock::create($request->all());

        return redirect()->route('regional-medellin.index')
            ->with('success', 'RegionalStock created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regionalStock = RegionalStock::find($id);

        return view('regional-stock.regional-medellin.show', compact('regionalStock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regionalStock = RegionalStock::find($id);
        $products = Product::pluck('product','id');
        return view('regional-stock.regional-medellin.edit', compact('regionalStock','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegionalStock $regionalStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegionalStock $regionalStock)
    {
        request()->validate(RegionalStock::$rules);

        $regionalStock->update($request->all());

        return redirect()->route('regional-medellin.index')
            ->with('success', 'RegionalStock updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $regionalStock = RegionalStock::find($id)->delete();

        return redirect()->route('regional-medellin.index')
            ->with('success', 'RegionalStock deleted successfully');
    }
}
