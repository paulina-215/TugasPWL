<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "ketikkan umur kamu";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "umur kamu sekarang adalah ";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "umur kamu ".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
