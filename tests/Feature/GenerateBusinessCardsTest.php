<?php

namespace Tests\Feature;

use App\Models\BusinessCard;
use Tests\TestCase;

class GenerateBusinessCardsTest extends TestCase
{
    /** @test */
    public function it_displays_a_page_to_generate_business_cards(): void
    {
        $response = $this->get(route('business-cards.create'));

        $response->assertOk();
    }

    /** @test */
    public function it_creates_a_business_card(): void
    {
        $businessCard = BusinessCard::factory()->make([
            'name' => 'test'
        ]);

        $data = [
            'name' => $businessCard->name,
            'linkedin_url' => $businessCard->linkedin_url,
            'github_url' => $businessCard->github_url,
        ];

        $response = $this->post(route('business-cards.store'), $data);

        $response->assertSessionHasNoErrors()
            ->assertRedirect(route('qrcode.show', 'test'));

        $this->assertDatabaseHas('business_cards', $data);
    }

    /** @test */
    public function it_validates_the_required_fields(): void
    {
        $response = $this->post(route('business-cards.store'), [
            'name' => '',
            'linkedin_url' => '',
            'github_url' => '',
        ]);

        $response
            ->assertSessionHasErrors(['name', 'linkedin_url', 'github_url']);

        $businessCard = BusinessCard::factory()->make();

        $response = $this->post(route('business-cards.store'), [
            'name' => $businessCard->name,
            'linkedin_url' => $businessCard->linkedin_url,
            'github_url' => $businessCard->github_url,
        ]);

        $response->assertSessionHasNoErrors();
    }

    /** @test */
    public function it_creates_a_slug(): void
    {
        $businessCard = BusinessCard::factory()->create(['name' => 'John Doe']);

        $this->assertEquals('john-doe', $businessCard->slug);
    }

    /** @test */
    public function it_validates_the_uniqueness_of_the_business_card_name(): void
    {
        BusinessCard::factory()->create(['name' => 'John Doe']);

        $response = $this->post(route('business-cards.store'), [
            'name' => 'John Doe',
        ]);

        $response
            ->assertSessionHasErrors(['name' => 'The name has already been taken.']);
    }
}
