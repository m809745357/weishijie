<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class WitnessTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_witnesses()
    {
        $witness = factory('App\Models\Witness')->create();

        $company = factory('App\Models\Company')->create();

        $response = $this->get('/witnesses');

        $response->assertSee($witness->title);
    }

    /** @test */
    public function a_user_can_read_a_single_witness()
    {
        $witness = factory('App\Models\Witness')->create();

        $company = factory('App\Models\Company')->create();

        $response = $this->get('/witnesses/' . $witness->id);

        $response->assertSee($witness->title);
    }
}
