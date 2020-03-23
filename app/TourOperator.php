<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourOperator extends Model
{
    protected $fillable=
    [
      'name',
      'city',
      'foundation_date',
      'tourist_destinations'
    ];
}
