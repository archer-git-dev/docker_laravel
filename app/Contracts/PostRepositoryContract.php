<?php

namespace App\Contracts;

use App\Dto\CreateRequestDto;
use App\Dto\PostsDto;
use App\Http\Requests\Post\PostStoreRequest;

interface PostRepositoryContract
{
    public function getAllPosts(): PostsDto;

    public function create(CreateRequestDto $dto): PostStoreRequest;
}
