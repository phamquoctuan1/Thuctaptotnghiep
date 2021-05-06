<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'shortdecription' => $this->shortdecription,
            'description'=> $this->description,
            'price'=> $this->price,
            'discount'=> $this->discount,
            'quantity'=> $this->quantity,
            'status'=> $this->status,
            'categoryid'=> $this->categoryid,
            'category_name'=>$this->category->name
        ];
    }
}
