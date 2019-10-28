<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testDias(){
        $response = $this->get('/dia');

        $response->assertStatus(200);
    }
    public function testDia(){
        $response = $this->get('/dia/17');
        $response->assertStatus(200);
    }
    
}
