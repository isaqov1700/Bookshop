<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'discount'
    ];

    public function book()
    {
       return $this->belongsTo(Book::class);
    }
}
