<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Type extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'description'];

    // una categoria può appartenere a più progetti
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
