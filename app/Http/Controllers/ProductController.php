<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Products\ProductStore;
use App\Http\Requests\Products\ProductUpdate;

class ProductController extends Controller
{

    /**
     *
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', [
            'products' => $products,
        ]);
    }

    /**
     * this shows the create project form
     */
    public function create($client_id = null)
    {
        $clients = Client::orderBy('name')->get();

        return view('product.create', [
            'client_id' => $client_id,
            'clients' => $clients
        ]);
    }

    /**
     * this will store the product itself
     */
    public function store(ProductStore $request)
    {
        $product = Product::create([
            'client_id' => $request->input('client_id'),
            'name' => $request->input('name'),
            'notes' => $request->input('notes'),
        ]);

        return redirect()->route('product')->with('success', ['The product has been created successfully.']);
    }

    public function edit(\App\Models\Product $product)
    {
        // refactor
        $clients = Client::orderBy('name')->get();

        return view('product.edit', compact('product', 'clients'));
    }

    public function update(ProductUpdate $request, \App\Models\Product $product)
    {
        $product->client_id = $request->input('client_id');
        $product->name = $request->input('name');
        $product->notes = $request->input('notes');

        $product->save();

        return redirect()->route('product')->with('success', ['The product has been successfully update.']);
    }

    /**
     * removes product from system
     */
    public function destroy(\App\Models\Product $product)
    {
        // @todo on delete, remove any invoices for this product
        $product->delete();

        return redirect()->route('product')->with('success', ['The product was removed from the system.']);
    }

}

