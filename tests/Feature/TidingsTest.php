<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TidingsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_tidings()
    {
        $tiding = factory('App\Models\Tiding')->create();

        $response = $this->get('/tidings');

        $response->assertSee($tiding->title);
    }

    /** @test */
    public function a_user_can_read_a_single_tiding()
    {
        $tiding = factory('App\Models\Tiding')->create();

        $response = $this->get('/tidings/' . $tiding->id);

        $response->assertSee($tiding->title);
    }
}
