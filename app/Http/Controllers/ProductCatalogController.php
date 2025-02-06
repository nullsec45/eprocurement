<?php

namespace App\Http\Controllers;

use Mockery\Undefined;
use Illuminate\Http\Request;
use App\Models\ProductCatalog;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Schema;
use App\Http\Resources\ProductCatalogResource;

class ProductCatalogController extends Controller
{
    public function index(){

        return view('product_catalog',[
            'categories' => CategoryProduct::select('id','category')->get()
        ]);
    }

    public function DataProduct(Request $request){
        $category=$request->category;
        $keyword=$request->keyword;

        $query = ProductCatalog::with([
                "category", "vendor"
            ])->select();

        if($category && $category !== 'undefined'){
            $query->where('category_id',$category);
        }

        if (!empty($keyword) && $keyword !== 'undefined') {
            $queryName = clone $query;
            $queryName->whereRaw("MATCH(name) AGAINST(? IN BOOLEAN MODE)", [$keyword]);

            if ($queryName->exists()) {
                $query = $queryName;
            } else {
                $query->whereRaw("MATCH(description) AGAINST(? IN BOOLEAN MODE)", [$keyword]);
            }
        }   

        $listProduct = $query->paginate(10);


        $data = [
            "data" => $listProduct->items() ? array_map(function ($item) {
              return (new ProductCatalogResource($item))->resolve();
            }, $listProduct->items()) : [],
            "pagination" => [
                "current_page" => $listProduct->currentPage(),
                "per_page" => $listProduct->perPage(),
                "total" => $listProduct->total(),
                "last_page" => $listProduct->lastPage(),
                "from" => $listProduct->firstItem(),
                "to" => $listProduct->lastItem(),
                "has_more_pages" => $listProduct->hasMorePages(),
                "first_page_url" => $listProduct->url(1),
                "last_page_url" => $listProduct->url($listProduct->lastPage()),
                "next_page_url" => $listProduct->nextPageUrl(),
                "prev_page_url" => $listProduct->previousPageUrl(),
                "path" => $listProduct->path(),
                "links" => $listProduct->toArray()["links"]
            ]
        ];

        return $data;
    }
}
