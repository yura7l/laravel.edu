<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;

    /**
     * Using class for soft deleting
     */
    use SoftDeletes;

    /**
     * Telling that table name is blog
     * because by default laravel will think that table name is blogs
     * (plural lowercase model name)
     */
    protected $table = 'blog';

    /**
     * This is how to change name of primary key in table
     * (by default it's "id")
     */
    //protected $primaryKey = 'post_id';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'author'
    ];
}
