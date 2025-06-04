<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Certification extends Model
{
    public function uploadable(): MorphTo
{
    return $this->morphTo();
}

}
