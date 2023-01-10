<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['nome_progetto', 'descrizione', 'collaboratori', 'autore', 'data_inizio_progetto'];
}