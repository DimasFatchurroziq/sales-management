<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['realization', 'total_price'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
