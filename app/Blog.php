<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'blog_id';
    protected $table = 'blog';

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'category_blog', 'blog_id', 'blog_categories_id');
    }
}
