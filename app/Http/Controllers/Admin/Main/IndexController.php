<?php

namespace App\Http\Controllers\Admin\Main;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends \App\Http\Controllers\Controller
{
    public function __invoke()
    {
        $products = Product::allowed()->get();

        return view('admin.homepage.index', compact('products'));
    }
}
