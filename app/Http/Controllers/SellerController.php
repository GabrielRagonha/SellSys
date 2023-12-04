<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::paginate(5);

        return view('seller/index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("seller/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email' => 'required|unique:sellers',
        ]);

        Seller::create($request->all());

        return redirect()->route("seller.index")->with('success', 'Vendedor adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seller = Seller::findOrFail($id);

        return view('seller/show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seller = Seller::findOrFail($id);

        return view('seller/edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seller = Seller::findOrFail($id);

        $seller->update($request->all());

        return redirect()->route("seller.index")->with('success', 'Vendedor editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seller = Seller::findOrFail($id);
        
        $seller->delete();

        return redirect()->route("seller.index")->with('success', 'Vendedor deletado com sucesso');
    }
}
