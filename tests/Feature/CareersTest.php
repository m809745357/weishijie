<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CareersTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_careers()
    {
        $career = factory('App\Models\Career')->create();

        $company = factory('App\Models\Company')->create();

        $response = $this->get('/careers');

        $response->assertSee($career->title);
    }
}
