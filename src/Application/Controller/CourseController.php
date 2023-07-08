<?php

namespace App\Application\Controller;

use App\Application\UseCases\GetCourseDetail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class CourseController extends AbstractController
{
    public function show(int $id, GetCourseDetail $getCourseDetail): JsonResponse
    {
        $course = $getCourseDetail($id);
        return new JsonResponse($course);
    }
}
