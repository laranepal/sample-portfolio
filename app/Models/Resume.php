<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Resume extends Model
{
    public function uploadable(): MorphTo
    {
        return $this->morphTo();
    }
}
