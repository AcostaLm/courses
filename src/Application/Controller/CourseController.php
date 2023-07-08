<?php

namespace App\Application\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class CourseController
{
    public function show(int $id): JsonResponse
    {
        return new JsonResponse($id);
    }
}
