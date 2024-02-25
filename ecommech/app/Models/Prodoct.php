<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subcatagory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prodoct extends Model

{
    use HasFactory;

    public function subcatagory(): BelongsTo
    {
        return $this->belongsTo(subcatagory::class);
    }


}
