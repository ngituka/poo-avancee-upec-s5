<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index(){
        //$clients = Client::all();
        //$clients = Client::where('city', 'Paris')->get();
        //$clients = Client::where('name', 'like', '%Jan%')->get();
        $client = Client::find(1);

        return view("clients.index", ['client'=>$client]);
    }
}
