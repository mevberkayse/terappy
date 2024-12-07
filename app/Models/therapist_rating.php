<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class therapist_rating extends Model
{
    //
    protected $table = 'therapist_rating_table';

    // Doldurulabilir alanlar
    protected $fillable = [
        'user_id',
        'therapist_id',
        'rating',
    ];

    // User ilişkisi
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Therapist ilişkisi
    public function therapist()
    {
        return $this->belongsTo(Therapist::class);
    }
}
