<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    // colleggo il modello con i progetti
    // una tecnologia può appartenere a più progetti
    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
