<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    // protected $table = 'events';

    protected $fillable = ['title', 'pj', 'konsultan', 'nohp', 'alamat', 'time', 'start_date', 'end_date'];
}
