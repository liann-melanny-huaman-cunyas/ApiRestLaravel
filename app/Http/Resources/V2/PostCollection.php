<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    //LLAMAR A RESOURCE DE LA V1 : ES EL FORMATO 
    public $collects = PostResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
            return [
                'data'=>$this->collection,
                'meta'=>[
                    'Autor'=>'Liann',
                ]
            ];
    }
}
