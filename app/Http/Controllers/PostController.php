<?php

namespace App\Http\Controllers;

use App\Contracts\PostServiceContract;
use App\Dto\CreateRequestDto;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Resources\CreatePostResource;
use App\Http\Resources\PostsResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        private PostServiceContract $postService
    )
    {

    }

    public function getPosts(Request $request)
    {

        $response = $this->postService->getPreviewPosts();

        return $this->successResponse(PostsResource::make($response));
    }

    public function store(PostStoreRequest $request)
    {
        $data = $request->validated();

        $response = $this->postService->createRequest(new CreateRequestDto(
            title: $data['title'],
            text: $data['text'],
            category: $data['category']
        ));

        return $this->successResponse(CreatePostResource::make([
                'message' => 'Пост успешно записан',
                'status' => $response,
        ]
        ));
    }
}
