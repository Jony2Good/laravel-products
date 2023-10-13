<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;



class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
       return view('admin.product.create');
    }
}
