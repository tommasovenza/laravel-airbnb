<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'address',
        'city',
        'cap',
        'district',
        'image',
        'rooms_number',
        'beds_number',
        'bathrooms_number',
        'square_meters',
        'availability'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
