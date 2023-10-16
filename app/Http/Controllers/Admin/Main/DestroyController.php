<?php

namespace App\Http\Controllers\Admin\Main;

use App\Models\Product;

class DestroyController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $item)
    {
        $item->delete();
        return redirect()->route('admin.index');
    }
}
