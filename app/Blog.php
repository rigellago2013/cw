<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
    protected $primaryKey = 'blog_id';
    protected $table = 'blog';

    protected $dates = ['published_on']; 

    protected $casts = [
        'published_on' => 'string', // Cast the created_at_formatted attribute to string
    ];
    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'category_blog', 'blog_id', 'blog_categories_id');
    }
    public function getPublishedOnFormattedAttribute($value)
    {
        return $this->formatDate($this->published_on);
    }

    private function formatDate($value)
    {
        // Calculate the difference between the current time and the provided date.
        $difference = Carbon::parse($value)->diffInMinutes();

        // Choose appropriate format based on the difference.
        if ($difference < 1) {
            return 'just now';
        } elseif ($difference < 60) {
            return $difference . ' minutes ago';
        } elseif ($difference < 1440) {
            return round($difference / 60) . ' hours ago';
        }elseif ($difference < 43200) { // Less than 30 days (30 days * 24 hours * 60 minutes)
            return round($difference / 1440) . ' days ago';
        } else {
            return Carbon::parse($value)->format('F j, Y'); 
        }
    }

    public function getPublishedOnFormattedDateStringAttribute()
    {
        // Assuming $value contains the date in Y-m-d format, e.g., "2024-02-07"
        $formattedDate = date("F j, Y", strtotime($this->published_on));
        return $formattedDate;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'blog_user');
    }
}
