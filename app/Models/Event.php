<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'time', 'start_date'];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
