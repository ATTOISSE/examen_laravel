<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function candidats()
    {
        return $this->hasMany(Candidat::class);
    }

    public function referentiel()
    {
        return $this->belongsTo(Referentiel::class);
    }

    public function referentiels()
    {
        return $this->belongsToMany(Referentiel::class,'formation_referentiel');
    }
}