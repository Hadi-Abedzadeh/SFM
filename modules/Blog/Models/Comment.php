<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'blg_comments';
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
