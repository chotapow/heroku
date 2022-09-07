<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /**
     * @test
     */
    public function it_displays_create_view_for_author()
    {
        $response = $this->get(route('authors.create'));

        $response->assertOk()->assertViewIs('authors.create');
    }
}
