<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return api_success(
            array('data' => ProductBrand::all())
        );
    }


    public function show($id)
    {
        $brand = ProductBrand::findOrFail($id);
        return api_success(
            array('data' => $brand->products)
        );
    }
}
