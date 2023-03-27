<?php

namespace App\Http\Controllers;

use App\Models\BusinessCard;

class QrCodeController extends Controller
{
    public function show(BusinessCard $businessCard)
    {
        return view('business_cards/qr_code/show', ['businessCard' => $businessCard]);
    }
}
