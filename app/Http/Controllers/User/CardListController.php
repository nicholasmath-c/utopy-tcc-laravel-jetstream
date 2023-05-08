<?php

namespace App\Http\Controllers;

use App\Models\CardList;
use App\Http\Requests\StoreCardListRequest;
use App\Http\Requests\UpdateCardListRequest;

class CardListController extends Controller
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
     * @param  \App\Http\Requests\StoreCardListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardList  $cardList
     * @return \Illuminate\Http\Response
     */
    public function show(CardList $cardList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardList  $cardList
     * @return \Illuminate\Http\Response
     */
    public function edit(CardList $cardList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardListRequest  $request
     * @param  \App\Models\CardList  $cardList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardListRequest $request, CardList $cardList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardList  $cardList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardList $cardList)
    {
        //
    }
}
