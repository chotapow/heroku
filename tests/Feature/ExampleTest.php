<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Author;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function it_displays_create_view_for_author()
    {
        $response = $this->get(route('authors.create'));

        $response->assertOk()->assertViewIs('authors.create');
    }

    /**
     * @test
     */
    public function it_stores_the_author()
    {
        $data = Author::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('authors.store'), $data);

        $this->assertDatabaseHas('authors', $data);

        $response->assertRedirect(route('authors.index'));
    }
}
