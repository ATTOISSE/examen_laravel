<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class,'candidat_formations');
    }
}