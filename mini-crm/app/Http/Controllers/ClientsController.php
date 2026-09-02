<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        $clients = [
            [
                'name' => 'Jean Dupont',
                'email' => 'jean@example.com',
                'city' => 'Paris'
            ],
            [
                'name' => 'Marie Martin',
                'email' => 'marie@example.com',
                'city' => 'Lyon'
            ]
        ]; 

        return view("clients", ['clients'=>$clients]);
    }
}
