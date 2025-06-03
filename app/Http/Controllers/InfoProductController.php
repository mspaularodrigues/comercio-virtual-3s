<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoProduct;
use App\Models\Product;

class InfoProductController extends Controller
{
     public function index(){
        return view('product.info_product', ['infoProduct' => InfoProduct::all()]);
    }

}
