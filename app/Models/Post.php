<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // arti dari fillable yaitu hanya dari ketiga hal tsb yang diperbolehkan diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // arti dari guarded yaitu hanya id aja yg tidak di perbolehkan di isi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
