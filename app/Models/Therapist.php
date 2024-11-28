<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    //

    public function features()
    {
        $features = TherapistFeature::where('therapist_id', $this->id)->get();
        return implode(',', $features->pluck('feature')->toArray());
    }
}
