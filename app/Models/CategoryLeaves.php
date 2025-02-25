<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLeaves extends Model
{
    use HasFactory,CsModel;
    protected  $casts = [
        'id' => 'string',
    ];
    protected $hidden = [
        'status'
    ];
}
