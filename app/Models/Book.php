<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'author_name',
        'publish_year',
        'category_id',
        'number',
        'price',
    ];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function discount()
    {
        return $this->belongsToMany(Discount::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }


}

