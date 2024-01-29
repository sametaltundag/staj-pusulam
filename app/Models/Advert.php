<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $guarded = [];
    protected $table = 'adverts';

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
