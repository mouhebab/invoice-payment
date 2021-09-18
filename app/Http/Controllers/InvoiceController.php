<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Products\ProductStore;
use App\Http\Requests\Products\ProductUpdate;

class InvoiceController extends Controller
{

    /**
     *
     */
    public function index()
    {
        return view('invoices.index', [
            'invoices' => Invoice::all(),
        ]);
    }

    /**
     *
     */
    public function create()
    {
        return view('invoices.create', [
            'invoice' => new Invoice(),
            'products' => Product::getSelectbox(),
        ]);
    }

    public function store(Request $request)
    {
        // rules
        $rules = [
            'product_id' => 'required|exists:product,id',
            'amount' => 'required',
        ];

        // validate
        $this->validate($request, $rules);

        // validation passed
        Invoice::create($request->only(['product_id', 'amount', 'due_at']));

        // return
        return redirect()->route('invoice')->with('success', ['The invoice was created']);
    }

}
