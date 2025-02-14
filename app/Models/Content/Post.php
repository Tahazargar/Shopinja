<?php

namespace App\Models\Content;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $casts = ['image' => 'array'];

    protected $fillable = [
        'title',
        'summary',
        'slug',
        'image',
        'status',
        'tags',
        'body',
        'published_at',
        'author_id',
        'category_id',
        'commentable',
    ];

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
