<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * Telling that table name is blog
     * because by default laravel will think that table name is blogs
     * (plural lowercase model name)
     */
    protected $table = 'blog';
}
