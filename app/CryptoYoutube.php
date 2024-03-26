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
        // Parse the provided date
        $date = Carbon::parse($value);
    
        // Get the difference in minutes between the current time and the provided date
        $difference = $date->diffInMinutes();
        // Get the difference in days between the current time and the provided date
        $differenceInDays = $date->diffInDays();
    
        // Choose appropriate format based on the difference
        if ($difference < 1) {
            return 'just now';
        } elseif ($difference < 60) {
            return $difference . ' minutes ago';
        } elseif ($difference < 1440) {
            return round($difference / 60) . ' hours ago';
        } elseif ($date->isToday()) {
            return 'today at ' . $date->format('h:i A');
        } elseif ($date->isYesterday()) {
            return 'yesterday at ' . $date->format('h:i A');
        } elseif ($difference < 43200) { // Less than 30 days (30 days * 24 hours * 60 minutes)
            return round($difference / 1440) . ' days ago';
        } elseif ($differenceInDays < 30) {
            return $differenceInDays . ' days ago';
        } elseif ($differenceInDays < 365) {
            // Calculate the number of months
            $months = $date->diffInMonths();
            if ($months == 1) {
                return '1 month ago';
            } else {
                return $months . ' months ago';
            }
        } else {
            // Calculate the number of years
            $years = $date->diffInYears();
    
            if ($years == 1) {
                return '1 year ago';
            } else {
                return $years . ' years ago';
            }
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
