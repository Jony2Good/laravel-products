<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class StoreProductService
{
    public function stored(array $data): void
    {
        try {
            Db::beginTransaction();
            $arr = [
                'article' => $data['article'],
                'name' => $data['name'],
                'status' => $data['status'],
                'attributes' => ['size' => $data['size'], 'color' => $data['color']],
            ];
            Product::create($arr);
            Db::commit();
        } catch (\Exception $e) {
            echo $e->getMessage();
            DB::rollBack();
            abort(500);
        }
    }
}
