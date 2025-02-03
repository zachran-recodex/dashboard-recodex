<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil kutipan inspirasional
        $quote = Inspiring::quote();

        // Kirim data ke view
        return view('dashboard.index', [
            'quote' => $quote,
        ]);
    }
}
