<?php

namespace App\Domain;

class Review
{
    private string $userName;
    private string $content;
    private int $rating;

    public function __construct(string $userName, string $content, int $rating)
    {
        $this->userName = $userName;
        $this->content = $content;
        $this->rating = $rating;
    }

    public function userName(): string
    {
        return $this->userName;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function rating(): int
    {
        return $this->rating;
    }
}
