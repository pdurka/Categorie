<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\CategoryTranslationCreatedEvent;
use App\Models\Categories;

class CategoryTranslations extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'name'];

    protected $dispatchesEvents = [
        "created" => CategoryTranslationCreatedEvent::class,
    ];

    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }

}
