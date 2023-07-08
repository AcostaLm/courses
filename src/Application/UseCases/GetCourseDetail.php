<?php

namespace App\Application\UseCases;

use App\Domain\Course;
use App\Domain\CourseRepository;

class GetCourseDetail
{
    private CourseRepository $repository;
    
    public function __construct(CourseRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }
    
    public function __invoke($id): Course
    {
        return new Course($id);
    }
}
