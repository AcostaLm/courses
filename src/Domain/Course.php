<?php

namespace App\Domain;

class Course
{
    private int $id;
    private string $title;
    private string $description;
    private float $price;
    private array $reviews;

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

}
