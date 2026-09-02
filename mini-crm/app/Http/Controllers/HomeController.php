<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $company = "Ma société";
        $clients = 134;
        $products = 48;
        $orders = 83;
        return view('home', [
            'company'=> $company,
            'clients'=>$clients,
            'products'=>$products,
            'orders'=>$orders
        ]);
    }
}
