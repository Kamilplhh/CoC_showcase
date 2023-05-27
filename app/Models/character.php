<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stat;

class character extends Model
{
    use HasFactory;

    public function stat()
    {
        return $this->belongsTo(Stat::class);
    }
}
