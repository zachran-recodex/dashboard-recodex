<?php

namespace App\Http\Controllers;

use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::orderByDesc('id')->paginate(10);

        return view('dashboard.index', compact('clients'));
    }
}
