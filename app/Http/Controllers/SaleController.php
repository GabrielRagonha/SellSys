<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Sale;

class SaleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sellers = Seller::all()->pluck('id', 'name');

        return view("sale/create", compact('sellers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_seller'    => 'required',
            'sale_value' => 'required',
        ]);

        Sale::create($request->all());

        return redirect()->route("dashboard")->with('success', 'Venda adicionada com sucesso');
    }
}
