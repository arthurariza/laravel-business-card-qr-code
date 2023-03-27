<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BusinessCard extends Model
{
    use HasFactory;

    const PER_PAGE = 10;

    protected $fillable = ['name', 'linkedin_url', 'github_url'];

    protected static function booted(): void
    {
        static::created(function (BusinessCard $businessCard) {
            $businessCard->slug = Str::slug($businessCard->name);
            $businessCard->save();
        });
    }

    public function generateQrCode()
    {
        return QrCode::size(100)->generate(route('business-cards.show', $this->slug));
    }
}
