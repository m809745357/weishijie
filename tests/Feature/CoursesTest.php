<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CoursesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_courses()
    {
        $course = factory('App\Models\Course')->create();

        $company = factory('App\Models\Company')->create();

        $response = $this->get('/courses');

        $response->assertSee($course->title);
    }

    /** @test */
    public function a_user_can_read_a_single_course()
    {
        $course = factory('App\Models\Course')->create();

        $company = factory('App\Models\Company')->create();

        $response = $this->get('/courses/' . $course->id);

        $response->assertSee($course->title);
    }
}
