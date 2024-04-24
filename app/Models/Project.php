<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'description', 'thumb', 'technologies', 'link_repo', 'type_id'];

    // aggiungo la possibilità di leggere le tabelle a lui collegate
    // il progetto appartiene ad un solo tipo
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
