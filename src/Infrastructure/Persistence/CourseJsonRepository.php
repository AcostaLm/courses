<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Course;
use App\Domain\CourseRepository;

class CourseJsonRepository implements CourseRepository
{
    public function search(int $id): ?Course
    {
        return new Course(1, "Curso 1", "Descrip", 9.99, []);
    }
}
