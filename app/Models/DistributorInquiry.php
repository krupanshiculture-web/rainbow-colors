<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistributorInquiry extends Model
{
    protected $fillable = [
        'name',
        'company',
        'phone',
        'email',
        'city',
        'state',
        'business_type',
        'message',
    ];
}