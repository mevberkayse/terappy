<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_to_therapist_matching extends Model
{
    //

    public function therapist()
    {
        return $this->hasOne(Therapist::class, 'id', 'therapist_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
