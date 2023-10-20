<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'img',
        'content',
        'time_create',
        'link_ytb',
        'link_ytb_topic',
        'link_zing',
        'link_spotify',
        'link_apple',
        'link_NCT',
        'link_tiktok',
        'link_facebook',
        ];
}
