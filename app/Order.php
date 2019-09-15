<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    /**
     * @return BelongsTo
     */
    public function buyer()
    {
        return $this->belongsTo('App\User', 'buyer_id');
    }

    /**
     * @return BelongsTo
     */
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
