<?php

namespace App\Infrastructure;

use App\Domain\Course;

class CourseMapper
{
    public static function toArray(Course $course): array
    {
        return [
            "id" => $course->id(),
            "title" => $course->title(),
            "description" => $course->description(),
            "price" => $course->price(),
            "is_top" => $course->isTop(),
            "reviews" => array_map(fn($review) => ReviewMapper::toArray($review), $course->reviews())
        ];
    }

    public static function fromArray(array $data): Course
    {
        return new Course(
            (int) $data["id"],
            $data["title"],
            $data["description"],
            floatval($data["price"]),
            array_map(fn($review) => ReviewMapper::fromArray($review), $data["reviews"])
        );
    }
}
