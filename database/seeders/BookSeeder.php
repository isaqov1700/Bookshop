<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'name'=>"Sariq devni minib",
                'author_name'=>'X.Toxtaboyev',
                'image'=>'image.jpk',
                'category_id'=>1,
                'number'=>1,
                'publish_year'=>2015,
                'description'=>'juda qiziq kitob',
                'price'=>'10000'
            ],
            [
                'name'=>"Sariq devni olimi",
                'author_name'=>'X.Toxtaboyev',
                'image'=>'image.jpk',
                'category_id'=>1,
                'number'=>1,
                'publish_year'=>2016,
                'description'=>'juda qiziq kitob',
                'price'=>'15000'
            ]
        ]);
    }
}
