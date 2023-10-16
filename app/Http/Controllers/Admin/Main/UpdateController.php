<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $item)
    {
        $data = $request->validated();
        $this->updateService->updated($data, $item);
        return redirect()->route('admin.index');
    }
}
