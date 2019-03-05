<?php

namespace Modules\Card\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'crd_pages';
    protected $guarded = [''];
    public $timestamps = false;

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
