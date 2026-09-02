<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $company = "Ma société";
        $nbclients = 0;
        $clients = [
            'Jean Dupont',
            'Marie Martin',
            'Paul Durand',
            'Sophie Bernard'
        ];  
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
            'clients'=>$clients,
            'nbproducts'=>$nbproducts,
            'products'=>$products,
            'orders'=>$orders,
            'name' => $name,
            'city' => $city,
            'stock' => $stock
        ]);
    }
}
