<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class UpdateProductService
{
    public function updated(array $data, Product $product): void
    {
        try {
            Db::beginTransaction();
            $arr = [
                'article' => $data['article'],
                'name' => $data['name'],
                'status' => $data['status'],
                'attributes' =>  ['size' => $data['size'], 'color' => $data['color']],
            ];
            $product->update($arr);
            Db::commit();
        } catch (\Exception $e) {
            echo $e->getMessage();
            DB::rollBack();
            abort(500);
        }
    }
}
