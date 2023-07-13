<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParcijalniLar;

class ParcijalniLarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return dd(
            ParcijalniLar::all()
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return dd(

            ParcijalniLar::find($id)->getOriginal()
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParcijalniLar $ParcijalniLar)
    {
        return abort("Parcijalni ispit Laravel :)");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=ParcijalniLar::find($id);
        $data-> parcijalni = $request("parcijalni");
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=ParcijalniLar::find($id);
        $data->delete();
    }
}
