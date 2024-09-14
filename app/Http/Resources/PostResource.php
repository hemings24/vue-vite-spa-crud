<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class PostResource extends JsonResource
{
   public function toArray(Request $request): array
   {
      return[ 
         'id' => $this->id,
         'title' => $this->title,
         'content' => substr($this->content,0,50).'...',
         'category_id' => $this->category_id,
         'category' => $this->category->name,
         'created_at' => $this->created_at->toDateString()
      ]; 
   }
}