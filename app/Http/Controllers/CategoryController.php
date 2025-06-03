<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('category.index', ['categories' => Category::all()]);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        Category::create($request->all());
        return redirect('/category');
    }

    public function destroy(Category $category) {
        if($category->products->count() > 0) {
            return 'Erro, tem mais de um produto';
        }

        $category->delete();
        return redirect('/category');
    }

public function show($categorySlug) {
    $category = Category::where('slug', $categorySlug)->firstOrFail();
    $products = $category->products();
    $maisVendidos = Product::whereIn('id', [1, 4, 7, 10, 13, 16])->get();
    $info = [
        ['title' => $category->info1_title, 'content' => $category->info1],
        ['title' => $category->info2_title, 'content' => $category->info2],
        ['title' => $category->info3_title, 'content' => $category->info3],
    ];
    $onlyOneInfo = count(array_filter($info, fn($section) => !empty($section['content']))) === 1;

    // Retorna a view
    return view('category.show', [
        'category' => $category,
        'products' => $products,
        'maisVendidos' => $maisVendidos,  
        'info' => $info,
        'onlyOneInfo' => $onlyOneInfo,
        'breadcrumbs' => [
            ['label' => 'Home', 'url' => route('dashboard')],
            ['label' => $category->name, 'url' => '']
        ]
    ]);
}

}
