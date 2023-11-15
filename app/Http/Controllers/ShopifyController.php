<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ShopifyController extends Controller
{
    function getDetails(Request $request){
        $shop = $request->user();

    //     if ($shop) {
    //         $shopDetails = $shop->api()->rest('GET','/admin/shop.json');
    //         if ($shopDetails && isset($shopDetails['body']['shop']['name'])) {
    //             echo "<pre>";
    //             print_r($shopDetails['body']['shop']['name']);
    //         } else {
    //             echo "Error fetching shop details.";
    //         }
    //     } else {
    //         echo "User not authenticated.";
    //     }
        $products = $shop->api()->rest('GET','/admin/api/2023-10/products.json');
        echo "<pre>";
        print_r($products['body']['products']);

    }
}