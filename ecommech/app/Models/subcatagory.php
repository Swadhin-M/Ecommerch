<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class subcatagory extends Model
{
    use HasFactory;

    public function catagory(): BelongsTo
    {
        return $this->belongsTo(Catagory::class);
    }
}
