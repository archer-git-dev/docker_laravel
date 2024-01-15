<?php

namespace App\Repository;

use App\Contracts\PostRepositoryContract;
use App\Dto\CreateRequestDto;
use App\Dto\PostItemDto;
use App\Dto\PostsDto;
use App\Http\Requests\Post\PostStoreRequest;
use App\Models\Post;

class PostRepository implements PostRepositoryContract
{
    public function __construct(
        private Post $model
    )
    {

    }

    public function getAllPosts(): PostsDto
    {
//        return new PostsDto(
//            items: array_map(function ($post) {
//                return new PostItemDto(
//                    id: $post['id'],
//                    title: $post['title'],
//                    text: $post['text'],
//                    category: $post['category']
//                );
//            }, $this->model->all()->toArray())
//        );



        return new PostsDto(
            items: $this->model->all()->each(function (Post $post) {
                return new PostItemDto(
                    id: $post->id,
                    title: $post->title,
                    text: $post->text,
                    category: $post->category
                );
            })
        );

    }

    public function create(CreateRequestDto $dto): PostStoreRequest
    {
        return $this->model->create([
            'title' => $dto->title,
            'text' => $dto->text,
            'category' => $dto->category,
        ]);
    }

}
