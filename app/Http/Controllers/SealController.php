<?php

namespace App\Http\Controllers;

use App\Models\Seal;
use App\Http\Requests\SealRequest;

class SealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSealRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seal  $seal
     * @return \Illuminate\Http\Response
     */
    public function show(Seal $seal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seal  $seal
     * @return \Illuminate\Http\Response
     */
    public function edit(Seal $seal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSealRequest  $request
     * @param  \App\Models\Seal  $seal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSealRequest $request, Seal $seal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seal  $seal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seal $seal)
    {
        //
    }
}
