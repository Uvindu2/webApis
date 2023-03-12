<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'productName'=>$this->productName,
            'prodctCategory'=>$this->prodctCategory,
            'quantity'=>$this->quantity,
            'unitPrice'=>$this->unitPrice,
            'description'=>$this->description,
            'model'=>$this->model,
            'imageUrl'=>$this->imageUrl,
            'colour'=>$this->colour,
            'cartStatus'=>$this->cartStatus
         ];
    }
}
