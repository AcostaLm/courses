<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Course;
use App\Domain\CourseRepository;
use App\Infrastructure\CourseMapper;

class CourseJsonRepository implements CourseRepository
{
    private array $data;

    public function __construct()
    {
        $fileContent = file_get_contents(__DIR__. '/data/courses.json');
        $this->data = json_decode($fileContent, true);
    }
    
    public function search(int $id): ?Course
    {
        $filtered = array_filter($this->data, fn($course) => $course['id'] == $id);
        $course = array_shift($filtered) ?? null;
        return is_null($course) ? null : CourseMapper::fromArray($course);
    }
}
