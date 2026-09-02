<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $company = "Ma société";
        $nbclients = 2;
        
        $nbproducts = 48;
        $products = [
            'Ordinateur',
            'Écran',
            'Clavier',
            'Souris',
            'Webcam'
            ];
        $orders = 83;
        $name = 'Jannie';
        $city = 'Auxerre';
        $stock = 67;
        return view('home', [
            'company'=> $company,
            'nbclients'=>$nbclients,
            'nbproducts'=>$nbproducts,
            'products'=>$products,
            'orders'=>$orders,
            'name' => $name,
            'city' => $city,
            'stock' => $stock
        ]);
    }
}
