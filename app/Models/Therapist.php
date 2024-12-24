<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    public function features()
    {
        $features = TherapistFeature::where('therapist_id', $this->id)->get();
        return implode(',', $features->pluck('feature')->toArray());
    }

    public function diseases() {
        $d = explode(', ', $this->branch);

        $diseases = Disease::whereIn('name_disease', $d)->get();
        return $diseases;
    }

    public function seminars() {
        return $this->hasMany(TherapistSeminar::class, 'therapist_id', 'id');
    }

}
