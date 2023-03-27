<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessCardResource;
use App\Models\BusinessCard;

class BusinessCardsController extends Controller
{
    public function index()
    {
        return BusinessCardResource::collection(BusinessCard::paginate(BusinessCard::PER_PAGE));
    }
}
