<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSeries extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'series_id',
    ];

    protected $table = 'book_series';
}
