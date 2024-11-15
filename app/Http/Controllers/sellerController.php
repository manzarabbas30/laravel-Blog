<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Seller;

class sellerController extends Controller
{
    function sellerList(Request $request)
    {
        return seller::find(2)->productData;
    }
}
