<?php
namespace Modules\Product\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Models\Product;
use Modules\Product\Models\Product_list;

class TempFrontendModuleProductController extends Controller
{

    public function catalog(Product_list $product_list)
    {
        return "ff" .$product_list;
        $product_id = $product_list->product_id;
        $products = Product_list::whereProduct_id($product_id)->get();
        return view('default.product.frontend.catalog', compact('products'));
    }
}
