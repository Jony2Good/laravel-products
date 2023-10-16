<?php

namespace App\Http\Controllers\Admin\Main;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.product.create');
    }
}
