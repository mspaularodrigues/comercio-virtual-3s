<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function show() {
    $maisVendidos = Product::whereIn('id', [1, 4, 7, 10, 13, 16])->get();
    $destaques = Product::whereIn('id', [2, 5, 8, 11, 14, 17])->get();

    // Retorna a view
    return view('dashboard', [
        'maisVendidos' => $maisVendidos,  
        'destaques' => $destaques,
    ]);
 }
}
