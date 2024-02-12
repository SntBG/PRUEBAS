<?php

namespace App\Http\Controllers;

use App\Models\RegionalStock;
use Illuminate\Http\Request;
use App\Models\Product;
/**
 * Class RegionalStockController
 * @package App\Http\Controllers
 */
class RegionalStockBogotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionalStocks = RegionalStock::where('regional', '=', 'BOGOTA')->get();

        return view('regional-stock.regional-bogota.index', compact('regionalStocks'));
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
        return view('regional-stock.regional-bogota.create', compact('regionalStock','products'));
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

            $existente = RegionalStock::where('products_id', $request->products_id)->exists();

            if ($existente) {
                return redirect()->back()->with('error', 'Ese artículo ya está creado')->withInput();
            }else{
                $regionalStock = RegionalStock::create($request->all());
                $this->updateState($request->products_id, $request->stock);
            }

            return redirect()->route('regional-bogota.index')->with('success', 'Se actualizó el registro');
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
        return view('regional-stock.regional-bogota.edit', compact('regionalStock','products'));
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

        $existente = RegionalStock::where('products_id', $request->products_id)->exists();

        if ($existente) {
            return redirect()->back()->with('error', 'Ese artículo ya está creado')->withInput();
        }else{
            $regionalStock->update($request->all());
            $this->updateState($request->products_id, $request->stock);
            return redirect()->route('regional-bogota.index')->with('success', 'Se actualizó el registro');
        }
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $regionalStock = RegionalStock::find($id)->delete();

        return redirect()->route('regional-bogota.index')
            ->with('success', 'RegionalStock deleted successfully');
    }



    public function updateState($id, $stock){
        $product = Product::find($id);
        $minimum = $product->minimum_stock;
        if($stock > $minimum){
            $status = "Altas";
        }elseif ($stock == 0 ) {
            $status = "Cero";
        }else{
            $status = "bajas";
        }

        $product->state = $status;
        $product->save();
    }
}
