<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formations extends Model
{
    use HasFactory;
    protected $fillable =[
        'label',
        'dateDebut',
        'dateFin',
        'description',
        'active',
        'dure',
        'image'
      
    ];
  
    public function scopeAvailable(Builder $builder): Builder
    {
        return $builder->where('active', true);
    }
    public function scopeRecent(Builder $builder): Builder
    {
        return $builder->orderBy('created_at', 'desc');
    }
    public function urlImage():string{
        return Storage::url($this->image);
    }
    public function etudiants(){
        return $this->hasMany(Etudiants::class);//cette category avoire plusier article
    }

}
