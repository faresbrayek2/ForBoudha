<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Si nécessaire, vous pouvez définir les champs assignables comme ceci :
    protected $fillable = ['nom', 'prenom', 'dateNaissance', 'adresse', 'tel'];
}
