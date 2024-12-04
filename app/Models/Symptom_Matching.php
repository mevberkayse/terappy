<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom_Matching extends Model
{
    //
    public function symptom()
    {
        return $this->hasOne(Symptom::class, 'id', 'symptom_id');
    }

    public function disease()
    {
        return $this->hasOne(Disease::class, 'id', 'disease_id');
    }
}
