<?php

namespace App\Http\Resources;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'contact_id' => $this->resource->contact_id,
            'user_id' => $this->resource->user_id,
            'date_order' => $this->resource->date_order,
            'user' => $this->resource->user,
            'product' => $this->resource->product,
            'contact' => $this->resource->contact,
        ];
    }
}
