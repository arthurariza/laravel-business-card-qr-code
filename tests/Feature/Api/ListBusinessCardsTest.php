<?php

namespace Tests\Feature\Api;

use App\Models\BusinessCard;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListBusinessCardsTest extends TestCase
{
    /** @test */
    public function it_lists_all_business_cards(): void
    {
        BusinessCard::factory()->create();

        $response = $this->get(route('api.business-cards.index'));

        $response
            ->assertSuccessful()
            ->assertJson(function (AssertableJson $json) {
                $json->has('data')
                    ->has('data.0', function (AssertableJson $json) {
                        $json->has('id')
                            ->has('name')
                            ->has('linkedin_url')
                            ->has('github_url')
                            ->has('updated_at')
                            ->has('created_at');
                    })->etc();
            });
    }

    /** @test */
    public function it_paginates_the_response(): void
    {
        BusinessCard::factory(BusinessCard::PER_PAGE + 1)->create();

        $response = $this->get(route('api.business-cards.index'));

        $response
            ->assertSuccessful()
            ->assertJson(function (AssertableJson $json) {
                $json->has('data', BusinessCard::PER_PAGE)->etc();
            });
    }
}
