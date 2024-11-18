<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SupplierModel::all();
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
        $supplier = SupplierModel::create($request->all());
        return response()->json($supplier,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplierModel $supplier)
    {
        return SupplierModel::find($supplier);
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
    public function update(Request $request, SupplierModel $supplier)
    {
        $supplier->update($request->all());
        return SupplierModel::find($supplier);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplierModel $supplier)
    {
        $supplier->delete();

        return response()->json([
            'success'   => true,
            'message'   => 'Data Terhapus',
        ]);
    }
}