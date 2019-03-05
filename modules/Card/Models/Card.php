<?php

namespace Modules\Card\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'crd_cards';
    protected $guarded = [''];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
