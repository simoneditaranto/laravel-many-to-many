<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'color', 'icon'];

    // colleggo il modello con i progetti
    // una tecnologia può appartenere a più progetti
    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
