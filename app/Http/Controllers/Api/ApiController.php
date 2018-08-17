<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;

class ApiController extends Controller
{
    use ApiResponser;

    /**
     * Construct parent Controller
     *
     * @return void
     */
    public function __construct()
    {
    }
}
