<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public $status;
    public $message;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource
     * @return void
     */
    public function toArray($request)
    {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
    public function __construct($status, $message, $resource){
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }
}
