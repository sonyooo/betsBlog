<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    const ROOT = 1;

    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'description',
    ];

    public function parentCategory() {
        return $this->belongsTo(BlogCategory::class, 'parent_id', 'id');
    }


    public function isRoot() {
        return $this->id === BlogCategory::ROOT;
    }
}
