<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemImage extends Model
{
    use SoftDeletes;

    /**
     * @return BelongsTo
     */
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
