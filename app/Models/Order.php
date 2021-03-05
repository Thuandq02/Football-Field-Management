<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'pitche_id',
        'starting_time',
        'end_time',
        'price'
    ];

    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function pitches(){
        return $this->belongsTo(Pitch::class, 'pitche_id');
    }
}
