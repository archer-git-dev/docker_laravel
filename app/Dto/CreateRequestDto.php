<?php

namespace App\Dto;

class CreateRequestDto
{
    public function __construct(
        public string $title,
        public string $text,
        public string $category
    )
    {
    }
}
