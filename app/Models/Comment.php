<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "comment";
    protected $fillable = [
        'author',
        'content',
        'post_id',
    ];
    protected $guarded = ['id'];

    protected function post()
    {
        return $this->belongsTo(Post::class);
    }


}
