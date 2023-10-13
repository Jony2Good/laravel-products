<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Service\ProductService;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{

    public function __construct(protected ProductService $service)
    {
    }

}
