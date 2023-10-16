<?php

namespace App\Http\Controllers\Admin\Main;

use App\Models\Product;

class ShowController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $item)
    {
        return view('admin.product.show', compact('item'));
    }
}
