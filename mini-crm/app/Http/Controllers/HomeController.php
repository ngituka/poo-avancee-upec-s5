<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $company = "Ma société";
        $clients = 0;
        $products = 48;
        $orders = 83;
        $name = 'Jannie';
        $city = 'Auxerre';
        $stock = 67;
        return view('home', [
            'company'=> $company,
            'clients'=>$clients,
            'products'=>$products,
            'orders'=>$orders,
            'name' => $name,
            'city' => $city,
            'stock' => $stock
        ]);
    }
}
