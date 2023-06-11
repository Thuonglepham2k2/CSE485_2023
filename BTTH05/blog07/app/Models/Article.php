<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'baiviet';
    protected $primaryKey = 'ma_bviet';
    public $timestamps = false;
    public function author()
    {
        return $this->belongsTo(Author::class, 'ma_tgia');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'ma_tloai');
    }

    use HasFactory;
}
