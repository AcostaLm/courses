<?php

namespace App\Domain;

class Course
{
    private int $id;
    private string $title;
    private string $description;
    private float $price;
    private array $reviews;

    const MIN_RATING_TOP = 5;

    public function __construct(int $id, string $title, string $description, float $price, array $reviews)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->reviews = $reviews;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function reviews(): array
    {
        return $this->reviews;
    }

    public function isTop(): bool
    {
        return $this->rating() >= self::MIN_RATING_TOP;
    }

    private function rating(): float
    {
        $rating = 0;
        foreach ($this->reviews as $review)
            $rating += $review->rating();
        return $rating / count($this->reviews);
    }

}
