<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    public $primaryKey = 'item_id';
    public $table = 'item';
    public $timestamps = false;

    protected $fillable = ['description','cost_price', 'sell_price','img', 'title'
 ];

}
