<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'category_blog', 'blog_categories_id', 'blog_id');
    }
}
