<?php

namespace Tests\Feature;

use App\Models\BusinessCard;
use Tests\TestCase;

class ShowBusinessCardTest extends TestCase
{
    /** @test */
    public function it_shows_a_business_card(): void
    {
        $businessCard = BusinessCard::factory()->create([
            'name' => 'John Doe'
        ]);

        $response = $this->get(route('business-cards.show', $businessCard->slug));

        $response->assertOk();
        $response->assertViewHas('businessCard', $businessCard);
    }
}
