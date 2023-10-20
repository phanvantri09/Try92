<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = [
        // 'name',
        'email',
        'numberPhone',
        'address',
        'link_ytb',
        'link_ytb_topic',
        'link_zing',
        'link_spotify',
        'link_apple',
        'link_NCT',
        'link_tiktok',
        'link_facebook',
        'status',
        ];
}
