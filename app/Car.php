<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;

class Car extends Model
{
    protected $fillable = [
        'model', 'plate', 'brand'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','owner_id','identity_card');
    }
}
