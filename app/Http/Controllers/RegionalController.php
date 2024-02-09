<?php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;

/**
 * Class RegionalController
 * @package App\Http\Controllers
 */
class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionals = Regional::paginate();

        return view('regional.index', compact('regionals'))
            ->with('i', (request()->input('page', 1) - 1) * $regionals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regional = new Regional();
        return view('regional.create', compact('regional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Regional::$rules);

        $regional = Regional::create($request->all());

        return redirect()->route('regionals.index')
            ->with('success', 'Regional created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regional = Regional::find($id);

        return view('regional.show', compact('regional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regional = Regional::find($id);

        return view('regional.edit', compact('regional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Regional $regional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regional $regional)
    {
        request()->validate(Regional::$rules);

        $regional->update($request->all());

        return redirect()->route('regionals.index')
            ->with('success', 'Regional updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $regional = Regional::find($id)->delete();

        return redirect()->route('regionals.index')
            ->with('success', 'Regional deleted successfully');
    }
}
