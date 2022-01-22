<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryTranslations;

class Categories extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(CategoryTranslations::class);
    }

}
