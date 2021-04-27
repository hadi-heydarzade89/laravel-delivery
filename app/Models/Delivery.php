<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    public $timestamps = false;
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'date_time',
    ];
}
