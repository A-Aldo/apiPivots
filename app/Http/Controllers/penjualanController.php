<?php

namespace App\Http\Controllers;

use App\Models\penjualans;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(penjualans::all());
        
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
    public function store(Request $request)
    {
        // Validasi dan simpan data penjualan baru
        $request->validate([
            'bulan' => 'required|string',
            'motor' => 'required|string',
            'area' => 'required|string',
            'penjualan' => 'required|integer',
        ]);

        $penjualan = penjualans::create($request->all());

        return response()->json($penjualan, 201); // Mengembalikan data yang baru dibuat dengan kode 201 (Created)
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
        //
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
