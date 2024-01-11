<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechRequest;
use App\Http\Requests\UpdateTechRequest;
use App\Models\Tech;


class TechController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTechRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tech $tech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tech $tech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechRequest $request, Tech $tech)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tech $tech)
    {
        //
    }
}
