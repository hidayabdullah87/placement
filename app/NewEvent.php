<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewEvent extends Model
{
    protected $fillable=[
        'id',
        'name',
        'desc',
        'image'
    ];
}
