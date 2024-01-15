<?php

namespace App\Dto;

class PostItemDto
{
    public function __construct(
        public int $id,
        public string $title,
        public string $text,
        public string $category
    )
    {
    }
}
