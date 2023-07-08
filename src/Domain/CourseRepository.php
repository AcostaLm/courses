<?php

namespace App\Domain;

interface CourseRepository
{
    public function search(int $id): ?Course;
}
