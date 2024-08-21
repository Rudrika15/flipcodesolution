<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use function Symfony\Component\Translation\t;

class BusinessResource extends JsonResource
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
            'id' => $this->resource->id,
            'partner_id' => $this->resource->partner_id,
            'business_name' => $this->resource->business_name,
            'shop_profile_pic_url' => $this->resource->shop_profile_pic_url,
            'business_legal_name' => $this->resource->business_legal_name,
            'address' => $this->resource->address,
            'latitude' => $this->resource->latitude,
            'longitude' => $this->resource->longitude,
            'phone_number' => $this->resource->phone_number,
            'salon_type' => $this->resource->salon_type,
            'website' => $this->resource->website,
            'twitter' => $this->resource->twitter,
            'facebook' => $this->resource->facebook,
            'instagram' => $this->resource->instagram,
            'pinterest' => $this->resource->pinterest,
            'show_barber_details' => $this->resource->show_barber_details,
            'sunday_from' => $this->resource->sunday_from,
            'sunday_to' => $this->resource->sunday_to,
            'monday_from' => $this->resource->monday_from,
            'monday_to' => $this->resource->monday_to,
            'tuesday_from' => $this->resource->tuesday_from,
            'tuesday_to' => $this->resource->tuesday_to,
            'wednesday_from' => $this->resource->wednesday_from,
            'wednesday_to' => $this->resource->wednesday_to,
            'thursday_from' => $this->resource->thursday_from,
            'thursday_to' => $this->resource->thursday_to,
            'friday_from' => $this->resource->friday_from,
            'friday_to' => $this->resource->friday_to,
            'saturday_from' => $this->resource->saturday_from,
            'saturday_to' => $this->resource->saturday_to,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
