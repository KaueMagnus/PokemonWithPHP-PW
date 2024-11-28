<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'power',
        'image',
        'coach_id'
    ];

    public function coach() {
        return $this->belongsTo(Coach::class);
    }
}
