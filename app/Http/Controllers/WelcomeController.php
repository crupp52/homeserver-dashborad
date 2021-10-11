<?php

namespace App\Http\Controllers;

use App\Models\ServiceCard;

class WelcomeController extends Controller
{
    public function index()
    {
        $serviceCards = ServiceCard::where('status', 1)->get();

        return view('welcome', [
            'serviceCards' => $serviceCards,
        ]);
    }
}
