<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CurriculaTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_curricula()
    {
        $curricula = factory('App\Models\Curriculum')->create();

        $company = factory('App\Models\Company')->create();

        $response = $this->get('/curricula');

        $response->assertSee($curricula->course->title);
    }
}
