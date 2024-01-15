<?php

namespace App\Http\Resources;

use App\Dto\PostItemDto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CreatePostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        /** @var PostItemDto $this */
        return [
            'message' => $this['message'],
            'status' => $this['status']
        ];
    }
}
