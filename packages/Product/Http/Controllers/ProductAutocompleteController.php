<?php

namespace TTSoft\Product\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use TTSoft\Product\Repositories\ProductRepositoryInterface;
use TTSoft\Product\Entities\Product;
use TTSoft\Product\Http\Requests\ValidationProductRequest;
use TTSoft\Product\Entities\ProductImage;
use TTSoft\Product\Entities\ProductTag;
use Illuminate\Support\Facades\DB;
class ProductAutocompleteController extends Controller
{
	public function autocomplete(Request $request)
    {
        $data = $request->all();
        // return response()->json($data) query;
        $products = Product::findByKeywords($data['query']);
        if (!empty($request->array)) {
            $products = $products->whereNotIn('id',$request->array);
        }
        $products = $products->orderBy('title','ASC')
            ->limit(5)
            ->get();
        if ($products != null) {
            $results = '';
            foreach ($products as $key => $value) {
                $price = $value->getPriceCurrently();
                $results.='<li>
                    <img src="'.$value->getImage().'" alt='.$value->getTitle().'""/>
                    <a class="append-record" href="javascript:void(0)" data-id="'.$value->getId().'">'.$value->getTitle().' <br /><span> SKU: '.$value->getSku().'</span><span> - Barcode: '.$value->getBarcode().'</span><span> - Giá: '.format_price($price).'</span></a>
                </li>';
            }
            return response()->json(['status' => 'OK','html' => $results]);
        }
        return response()->json(['status' => 'ERROR']);
    }
}
