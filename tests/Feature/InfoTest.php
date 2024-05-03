<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InfoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_info_json(): void
    {
        $response = $this->get('/info');

        $response->assertStatus(200);
        $response->assertJson([
            'data' => 'i4gic'
        ]);
    }
    public function test_product_add_success(): void
    {
        $response = $this->postJson('/product/add', [
            'name'=>'Grape',
            'price'=>10
            ]
        );

        $response->assertStatus(200);
    }
    public function test_product_add_missing_price(): void
    {
        $response = $this->postJson('/product/add', [
            'name'=>'Grape',
            ]
        );

        $response->assertStatus(422);
    }

}
