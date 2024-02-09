<?php

namespace App\Http\Controllers;

use App\Models\PackagingType;
use Illuminate\Http\Request;

/**
 * Class PackagingTypeController
 * @package App\Http\Controllers
 */
class PackagingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packagingTypes = PackagingType::paginate();

        return view('packaging-type.index', compact('packagingTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $packagingTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packagingType = new PackagingType();
        return view('packaging-type.create', compact('packagingType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PackagingType::$rules);

        $packagingType = PackagingType::create($request->all());

        return redirect()->route('packaging-types.index')
            ->with('success', 'PackagingType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packagingType = PackagingType::find($id);

        return view('packaging-type.show', compact('packagingType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packagingType = PackagingType::find($id);

        return view('packaging-type.edit', compact('packagingType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PackagingType $packagingType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackagingType $packagingType)
    {
        request()->validate(PackagingType::$rules);

        $packagingType->update($request->all());

        return redirect()->route('packaging-types.index')
            ->with('success', 'PackagingType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $packagingType = PackagingType::find($id)->delete();

        return redirect()->route('packaging-types.index')
            ->with('success', 'PackagingType deleted successfully');
    }
}
