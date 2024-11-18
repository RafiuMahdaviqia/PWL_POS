<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StockModel;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StockModel::all();
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
        $stok = StockModel::create($request->all());
        return response()->json($stok,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(StockModel $stok)
    {
        return StockModel::find($stok);
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
    public function update(Request $request, StockModel $stok)
    {
        $stok->update($request->all());
        return StockModel::find($stok);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StockModel $stok)
    {
        $stok->delete();

        return response()->json([
            'success'   => true,
            'message'   => 'Data Terhapus',
        ]);
    }
}