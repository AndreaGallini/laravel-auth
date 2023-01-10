<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['nome_progetto', 'slug','descrizione', 'collaboratori', 'autore', 'data_inizio_progetto'];
    public static function createSlug($nome_progetto){
        return Str::slug($nome_progetto, '-');
    }
}
