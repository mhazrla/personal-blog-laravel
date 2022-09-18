<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'post_id' => $this->id,
            'title' => $this->title,
            'content' => $this->description,
            'category_id' => $this->category_id,
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'secret' => $this->when($this->id == 11, 'secret value'),
            'url' => route('api.posts.show', $this->id)

        ];
    }
}
