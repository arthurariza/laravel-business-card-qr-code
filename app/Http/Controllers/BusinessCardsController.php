<?php

namespace App\Http\Controllers;

use App\Models\BusinessCard;
use Illuminate\Http\Request;

class BusinessCardsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'unique:business_cards,name'],
            'linkedin_url' => ['required', 'url'],
            'github_url' => ['required', 'url'],
        ]);

        BusinessCard::create($validated);

        return redirect(route('business-cards.show'));
    }

    public function create()
    {
        return view('business_cards/create');
    }
}
