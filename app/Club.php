<?php

namespace Xtrainers;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
