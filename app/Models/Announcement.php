<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'image_path',
        'start_date',
        'end_date',
        'is_active',
        'created_by',
    ];
}
