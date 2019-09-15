<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    /**
     * @return HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * @return HasMany
     */
    public function images()
    {
        return $this->hasMany('App\ItemImage');
    }
}
