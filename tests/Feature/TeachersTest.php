<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TeachersTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_teachers()
    {
        $tiding = factory('App\Models\Teacher')->create();

        $response = $this->get('/teachers');

        $response->assertSee($tiding->name);
    }
}
