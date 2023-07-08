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
            "is_top" => true, // TODO: implement methods for top courses
            "reviews" => array_map(fn($review) => ReviewMapper::toArray($review), $course->reviews())
        ];
    }

    public static function fromArray(array $data): Course
    {
        return new Course(
            $data["id"],
            $data["title"],
            $data["description"],
            $data["price"],
            array_map(fn($review) => ReviewMapper::fromArray($review), $data["reviews"])
        );
    }
}
