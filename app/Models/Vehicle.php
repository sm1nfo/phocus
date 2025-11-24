<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['client_id', 'brand', 'model', 'plate', 'year'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
