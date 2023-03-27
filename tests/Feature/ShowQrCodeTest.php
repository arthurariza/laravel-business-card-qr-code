<?php

namespace Tests\Feature;

use App\Models\BusinessCard;
use Tests\TestCase;

class ShowQrCodeTest extends TestCase
{
    /** @test */
    public function it_displays_a_page_with_the_qr_code(): void
    {
        $businessCard = BusinessCard::factory()->create([
            'name' => 'John Doe',
        ]);

        $response = $this->get(route('qrcode.show', $businessCard->slug));

        $response
            ->assertOk()
            ->assertViewHas('businessCard', $businessCard)
            ->assertSeeText($businessCard->name)
            ->assertSeeText('Scan Me')
            ->assertSee('svg');
    }
}
