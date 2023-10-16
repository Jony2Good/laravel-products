<?php

namespace App\Http\Controllers\Admin\Main;

use App\Models\Product;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = Product::allowed()->get();

        return view('admin.homepage.index', compact('products'));
    }
}
