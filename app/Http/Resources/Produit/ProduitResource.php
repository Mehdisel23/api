<?php

namespace App\Http\Resources\Produit;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProduitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' =>$this -> name ,
            'discription'=>$this -> detail ,
            'price'=>$this -> price ,
            'stock'=>$this -> stock,
            'discount'=>$this -> discount,


        ];
    }
}
