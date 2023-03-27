<?php

namespace App\Http\Controllers;

use App\Models\BusinessCard;
use Illuminate\Http\Request;

class BusinessCardsController extends Controller
{
    public function show(BusinessCard $businessCard)
    {
        return view('business_cards/show', ['businessCard' => $businessCard]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'unique:business_cards,name'],
            'linkedin_url' => ['required', 'url'],
            'github_url' => ['required', 'url'],
        ]);

        $businessCard = BusinessCard::create($validated);

        return redirect(route('qrcode.show', $businessCard));
    }

    public function create()
    {
        return view('business_cards/create');
    }
}
