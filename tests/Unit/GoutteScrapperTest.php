<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\GoutteScrapper;


class GoutteScrapperTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_courses_return_given_url()
    {
        $udemy = 'https://www.udemy.com/courses/development/web-development/';
        $Scrapper = new GoutteScrapper;
        $udemyWebCourses = $Scrapper->getCourses($udemy);

        $this->assertTrue(true);
    }
}
