<?php

namespace App\Services;

use App\Contracts\PostRepositoryContract;
use App\Contracts\PostServiceContract;
use App\Dto\CreateRequestDto;
use App\Dto\PostsDto;
use function Laravel\Prompts\error;

class PostService implements PostServiceContract
{
    public function __construct(
        private PostRepositoryContract $postRepo
    )
    {

    }

    public function getPreviewPosts(): PostsDto
    {
        return $this->postRepo->getAllPosts();
    }

    public function createRequest(CreateRequestDto $dto): bool
    {
        try {
            $request = $this->postRepo->create($dto);

            return (bool)$request;
        } catch (\Throwable $exception) {
            error($exception);

            return $exception->getMessage();
        }
    }
}
