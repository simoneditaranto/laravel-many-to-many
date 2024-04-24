<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'description', 'thumb', 'link_repo', 'type_id'];

    // aggiungo la possibilità di leggere le tabelle a lui collegate
    // il progetto appartiene ad un solo tipo
    public function type() {
        return $this->belongsTo(Type::class);
    }

    // colleggo il modello con le tecnologie
    // un progetto può appartenere a più tecnologie
    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }
}
