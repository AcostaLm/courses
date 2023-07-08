<?php

namespace App\Infrastructure;

use App\Domain\Review;

class ReviewMapper
{
    public static function toArray(Review $review): array
    {
        return [
            "userName" => $review->userName(),
            "content" => $review->content(),
            "rating" => $review->rating()
        ];
    }
    
    public static function fromArray(array $data): Review
    {
        return new Review($data["userName"], $data["content"], $data["rating"]);
    }
}
