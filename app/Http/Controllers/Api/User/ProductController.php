<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiController;
use App\Models\Product;

class ProductController extends ApiController
{
    /**
     * Display a listing of the newest products for slide show.
     *
     * @return \Illuminate\Http\Response
     */
    public function newestProductsSlide()
    {
        $newestProductsSlide = Producth::where('parent_id', 0)->with('children')->get();
        return $this->showAll($newestProductsSlide, Response::HTTP_OK);
    }
}
