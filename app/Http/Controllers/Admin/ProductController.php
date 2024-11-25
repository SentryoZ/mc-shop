<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductCommands;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.create');
    }


    public function store(StoreProductRequest $request)
    {

        try {
            Log::info('Product creation request:', [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $request->image,
                'commands' => $request->commands,
            ]);
            // Save the product data
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);

            // Save the image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Save the image path to the database
            ProductImages::create([
                'product_id' => $product->id,
                'index' => 0,
                'is_thumbnail' => true,
                'source' => $imageName,
            ]);

            ProductCommands::create([
                'product_id' => $product->id,
                'index' => 0,
                'command' => $request->item_name
            ]);

            // log the product creation
            Log::info('Product created:', [
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $imageName,
                'commands' => $request->commands,
            ]);

            return redirect()->route('admin.dashboard')
                ->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            Log::error('Product creation failed:', [
                'error' => $e->getMessage(),
            ]);
            return redirect()->route('admin.dashboard')
                ->with('error', 'Product creation failed!');
        }
    }
}
