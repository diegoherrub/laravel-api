<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Pharmacy::all());
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
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'name_pharmacy' => 'required|unique:pharmacies|max:32',
            'range_date' => 'required|max:32',
            'location' => 'required|max:64',
            'phone' => 'required|max:16',
            'day' => 'required|max:2',
            'month' => 'required|max:16',
        ]);

        $pharmacy = Pharmacy::create($validated);
        return response()->json($pharmacy, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pharmacy = Pharmacy::findOrFail($id);
        return response()->json($pharmacy);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_pharmacie' => 'sometimes|unique:pharmacies|max:32',
            'range_date' => 'sometimes|max:32',
            'location' => 'sometimes|max:64',
            'phone' => 'sometimes|max:16',
            'day' => 'sometimes|max:2',
            'month' => 'sometimes|max:16',
        ]);

        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->update($validated);
        return response()->json($pharmacy);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->delete();
        return response()->json(['message' => 'Pharmacy deleted successfully']);
    }
}
