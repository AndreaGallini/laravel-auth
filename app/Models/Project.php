<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function createSlug($nome_progetto){
        return Str::slug($nome_progetto, '-');
    }
    public function category(): BelongsTo
    {
        $this->belongsTo(Category::class);
    }
}
