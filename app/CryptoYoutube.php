<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CryptoYoutube extends Model
{
    protected $primaryKey = 'sr_no';
    protected $table = 'crypto_feeds';
    protected $dates = ['upload_date']; 
    protected $appends = ['upload_date_format'];

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

    public function getUploadDateFormattedAttribute($value)
    {
        return $this->formatDate($this->upload_date);
    }

    public function getUploadDateFormatAttribute()
    {
        return $this->formatDate($this->upload_date);
    }
}
