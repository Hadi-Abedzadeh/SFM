<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{

    protected $table = 'blg_categories';
    protected $fillable = ['id', 'name', 'slug'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }


    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
