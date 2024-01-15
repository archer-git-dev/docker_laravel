<?php

namespace App\Contracts;

use App\Dto\CreateRequestDto;
use App\Dto\PostsDto;
use App\Http\Requests\Post\PostStoreRequest;

interface PostServiceContract
{
    public function getPreviewPosts(): PostsDto;

    public function createRequest(CreateRequestDto $dto): bool;
}
