<?php

namespace App\Http\Controllers\BackEnd;

use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Models\ProductTypes;
use App\Models\Brands;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('backend.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = ProductTypes::all();
        $brands = Brands::all();
        return view('backend.products.create', compact('types', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'material' => 'required',

        ]);
        $image = $this->uploadImage($request, 'image', 'images');

        $product = new Products();
        $typeId = $request->type;
        $formatType = substr($typeId, 1);
        $lastProduct = Products::where('type_id', $typeId)->orderBy('product_id', 'desc')->first();
        if ($lastProduct) {
            $lastNumber = intval(substr($lastProduct->product_id, strlen($formatType)));
        } else {
            $lastNumber = 0;
        }
        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        $product->product_id = $formatType . $newNumber;
        $product->image = $image ?: $product->image;
        $product->name = $request->name;
        $product->type_id = $request->type;
        $product->brand_id = $request->brand;
        $product->price = $request->price;
        $product->material = $request->material;
        $product->save();
        return redirect()->route('products.index');
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
        $product = Products::where('product_id', $id)->first();
        $types = ProductTypes::all();
        $brands = Brands::all();
        return view('backend.products.edit', compact('product', 'types', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'type' => ['required', 'string'], // Fixed the validation rule
            'brand' => ['required', 'string'], // Fixed the validation rule
            'price' => ['required', 'numeric'], // Added numeric validation for price
            'image' => ['image', 'max:3000'],
            'material' => ['required', 'string'], // Added string validation for material
        ]);

        // Find the product by product_id or fail with a 404
        $product = Products::where('product_id', $id)->firstOrFail();

        DB::table('products')->where('product_id', $id)->update([
            'name' => $request->name,
            'type_id' => $request->type,
            'brand_id' => $request->brand,
            'price' => $request->price,
            'material' => $request->material,
            'image' => $image ?? $product->image,
        ]);


        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->where('product_id', $id)->delete();

        Log::info(Products::where('product_id', $id)->toSql());

        return response(['status' => 'success', 'message' => 'Product']);
    }
}
