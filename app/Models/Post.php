<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title, excerpt, bod, category_id'];
    protected $guarded = ['id'];


    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
