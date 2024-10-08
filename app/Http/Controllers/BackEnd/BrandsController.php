<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BrandsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BrandsDataTable $dataTable)
    {
        return $dataTable->render('backend.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'country' => 'required|string',
        ]);
        $lastProduct = Brands::orderBy('brand_id', 'desc')->first();
        $lastIdNumber = $lastProduct ? intval(substr($lastProduct->brand_id, 3)) : 0;
        do {
            $newIdNumber = $lastIdNumber + 1;
            $newBrandId = 'NHA' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
            $existingBrand = Brands::where('brand_id', $newBrandId)->first();
            $lastIdNumber = $newIdNumber;
        } while ($existingBrand);

        Brands::create([
            'brand_id' => $newBrandId,
            'brand_name' => $request->brand_name,
            'country' => $request->country,
        ]);
        return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
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
        $brand = Brands::where('brand_id', $id)->first();
        return view('backend.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'country' => 'required|string',
        ]);
        Brands::where('brand_id', $id)->update([
            'brand_name' => $request->brand_name,
            'country' => $request->country,
        ]);
        return redirect()->route('brands.index')->with('success', 'Brand updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brands::where('brand_id', $id)->delete();
       return response(['status'=>'success','message' => 'Brand deleted successfully.']);
    }
}

