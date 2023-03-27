<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BusinessCard extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'linkedin_url', 'github_url'];

    protected static function booted(): void
    {
        static::created(function (BusinessCard $businessCard) {
            $businessCard->slug = Str::slug($businessCard->name);
            $businessCard->save();
        });
    }
}
