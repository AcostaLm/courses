<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Course;
use App\Domain\CourseRepository;

class CourseJsonRepository implements CourseRepository
{
    public function search(int $id): ?Course
    {
        return new Course($id);
    }
}
