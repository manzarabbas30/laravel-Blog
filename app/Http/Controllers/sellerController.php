<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Seller;

class sellerController extends Controller
{
    function sellerList()
    {
        return seller::find(2)->productData;
    }

    function manyList()
    {
        return seller::find(1)->productmanyData;
    }
}
