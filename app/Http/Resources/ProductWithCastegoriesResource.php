<?php

namespace App\Http\Resources;

use App\Models\Api\Categories;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductWithCastegoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'name' => $this->name,
            'categories' => CategoriesResource::collection($this->categories)
        ];
    }
}
