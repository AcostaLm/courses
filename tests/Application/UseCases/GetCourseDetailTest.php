<?php

namespace App\Tests\Application\UseCases;

use App\Application\UseCases\GetCourseDetail;
use App\Domain\Course;
use App\Domain\CourseRepository;

class GetCourseDetailTest extends \PHPUnit\Framework\TestCase
{
    public function testGetCourseDetail(): void
    {
        $courseRepository = $this->getMockBuilder(CourseRepository::class)
                            ->getMock();
        
        $mockCourse = new Course(1, "Curso 1", "Descripción de prueba", 99.99, []);

        $courseRepository->method("search")->willReturn($mockCourse);

        $getCourseDetail = new GetCourseDetail($courseRepository);

        $course = $getCourseDetail(1);

        $this->assertInstanceOf(Course::class, $course);
        $this->assertEquals($mockCourse, $course);
    }
}
