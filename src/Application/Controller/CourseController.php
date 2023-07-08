<?php

namespace App\Application\Controller;

use App\Application\UseCases\GetCourseDetail;
use App\Infrastructure\CourseMapper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class CourseController extends AbstractController
{
    public function show(int $id, GetCourseDetail $getCourseDetail): JsonResponse
    {
        $course = $getCourseDetail($id);
        if (is_null($course))
            return new JsonResponse([], 404);
        
        return new JsonResponse(CourseMapper::toArray($course));
    }
}
