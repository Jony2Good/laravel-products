<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Service\StoreProductService;
use App\Service\UpdateProductService;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{

    public function __construct(
        protected StoreProductService  $storeService,
        protected UpdateProductService $updateService
    )
    {
    }

}
