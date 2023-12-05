<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'publisher',
    ];
    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }
    }
    public function scopePublisherSearch($query, $publisher)
    {
        if (!empty($publisher)) {
            $query->where('publisher', 'like', '%' . $publisher . '%');
        }
    }
}
