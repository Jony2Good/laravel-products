<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Requests\Admin\Product\StoreRequest;

class StoreController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->storeService->stored($data);
        return redirect()->route('admin.index');
    }
}
