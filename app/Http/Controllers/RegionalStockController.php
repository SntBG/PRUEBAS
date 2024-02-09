<?php

namespace App\Http\Controllers;

use App\Models\RegionalStock;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Regional;
/**
 * Class RegionalStockController
 * @package App\Http\Controllers
 */
class RegionalStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionalStocks = RegionalStock::paginate();

        return view('regional-stock.index', compact('regionalStocks'))
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
        $regionals = Regional::pluck('regional','id');
        return view('regional-stock.create', compact('regionalStock','products','regionals'));
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

        return redirect()->route('regional-stocks.index')
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

        return view('regional-stock.show', compact('regionalStock'));
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
        $regionals = Regional::pluck('regional','id');
        return view('regional-stock.edit', compact('regionalStock','products','regionals'));
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

        return redirect()->route('regional-stocks.index')
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

        return redirect()->route('regional-stocks.index')
            ->with('success', 'RegionalStock deleted successfully');
    }
}
