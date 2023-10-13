<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductService
{
    public function store(array $data): void
    {
        try {
            Db::beginTransaction();
            $arr = [
                'article' => $data['article'],
                'name' => $data['name'],
                'status' => $data['status'],
                'attributes' =>  json_encode(['size' => $data['size'], 'color' => $data['color']]),
            ];
            $prod = Product::create($arr);
            Db::commit();
        } catch (\Exception $e) {
            echo $e->getMessage();
            DB::rollBack();
            abort(500);
        }
    }
}
