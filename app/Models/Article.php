<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
        'user_id',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function paragraphs() {
        return $this->hasMany(Paragraph_article::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
