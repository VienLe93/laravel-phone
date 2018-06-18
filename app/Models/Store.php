<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['address', 'city_id', 'district_id', 'ward_id'];
    public $timestamps = true;
}
