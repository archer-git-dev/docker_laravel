<?php

namespace App\Http\Resources;

use App\Dto\PostItemDto;
use App\Dto\PostsDto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        /** @var PostsDto $this */
        return [
            'items' => PostItemResource::collection($this->items),
        ];
    }
}
