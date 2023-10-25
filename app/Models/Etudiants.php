<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Formations;
class Etudiants extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'prenom',
        'address',
        'specialite',
        'dateNaissance',
        'email',
        'telephone',
        'lieuNaissance',
        'formations_id',
        'user_id'
    ];
    public function formation(){
        return $this->belongsTo(Formations::class);//cette methode dire ce etudiant la  apartient une formation plusieur etudiant 3andhom formation wa7da
    }
}
