<?php

namespace App\Http\Resources;

use App\Dto\PostItemDto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostItemResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'category' => $this->category,
        ];
    }
}
