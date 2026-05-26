<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected function casts(): array
    {

        return [

            'starts_at' => 'datetime',
            'ends_at' => 'datetime',

        ];

    }
}
