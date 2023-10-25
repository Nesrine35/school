<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Enseignants extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'prenom',
        'address',
        'specialite',
        'dateNaissance',
        'email',
        'telephone'
    ];
    public function scopeens(Builder $builder): Builder
    {
        return $builder->orderBy('created_at', 'desc');
    }
    public function formations(): HasMany
    {
        return $this->hasMany(Formations::class);
    }
}
