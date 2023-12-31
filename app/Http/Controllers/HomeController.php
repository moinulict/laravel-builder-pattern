<?php

namespace App\Http\Controllers;

use App\Services\PriceCalculation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request, PriceCalculation $priceCalculation)
    {

        $grandTotal = $priceCalculation
            ->setAmount($request->amount)
            ->setTax($request->tax)
            ->setDiscount($request->discount)
            ->calculatePrice();

        return view('welcome')->with("grandTotal", $grandTotal);
    }
}
