<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Biriyani extends Model
{
    public $timestamps = false;
    protected $table = 'biriyani';
    protected $fillable = [
        'name',
        'min_price',
        'max_price',
        'description',
        'sku',
        'category',
        'imageurl',
        'reviews',
    ];
    protected $casts = [
        'reviews' => 'array'
    ];
}