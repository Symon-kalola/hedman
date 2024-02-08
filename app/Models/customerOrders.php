<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerOrders extends Model
{
    use HasFactory;
    /**
     * The roles that belong to the customerOrders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}