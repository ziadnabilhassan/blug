<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'count',
        'proudect_id',
        'user_id',
        'address',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function proudect(){
        return $this->belongsTo('App\Models\Proudect','proudect_id');
    }
}
