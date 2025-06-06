<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\InfoProduct;


class ProductController extends Controller
{
    public function index(){
        return view('product.index', ['products' => Product::all()]);
    }

    public function create(){
        return view('product.create', ['categories' => Category::all()]);
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect('/product');
    }

    public function edit(Product $product){
        return view('product.edit', 
            ['product' => $product, 
             'categories' => Category::all()]);
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return redirect('/product');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/product');
    }

    public function show($slug)
{
    $product = Product::where('slug', $slug)->firstOrFail();
    $info = InfoProduct::where('product_id', $product->id)->first(); 
    $category = $product->category;
    $breadcrumbs = [
        ['label' => 'Home', 'url' => route('dashboard')], 
        ['label' => $category->name ?? 'Categoria', 'url' => route('categories.show', $category)],
        ['label' => $product->name, 'url' => ''] 
    ];
    $produtosSimilares = Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->take(3)
    ->get();

    return view('product.show', compact('product', 'info', 'breadcrumbs', 'produtosSimilares'));
}


}

