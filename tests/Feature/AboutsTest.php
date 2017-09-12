<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AboutsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_abouts()
    {
        $about = factory('App\Models\About')->create();

        $response = $this->get('/aboutus');

        $response->assertSee($about->title);
    }
}
