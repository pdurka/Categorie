<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategorieTest extends TestCase
{
    public function testsCategoriesAreCreatedCorrectly()
    {
        $payload = [
            [
                'country' => 'PL',
                'name' => 'Wody',
            ],
            [
                'country' => 'EN',
                'name' => 'Water',
            ]
        ];

        $this->json('POST', '/api/categorie', $payload)
            ->assertStatus(201)
            ->assertJson([['country' => 'PL', 'name' => 'Wody'],['country' => 'EN', 'name' => 'Water']]);
    }

}
