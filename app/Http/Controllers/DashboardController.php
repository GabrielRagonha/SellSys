<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $sales = DB::table('sales')
        ->join('sellers', 'sales.id_seller', '=', 'sellers.id')
        ->select('sales.id', 'sellers.name', 'sellers.email', 'sales.sale_value', 'sales.created_at')
        ->orderBy('created_at')
        ->paginate(10);

        foreach ($sales as $sale) {
            $sale->commission = $sale->sale_value * 0.085;
        }

        return view('dashboard', compact('sales'));
    }
}
