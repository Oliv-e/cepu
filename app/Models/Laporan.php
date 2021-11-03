<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'klasifikasi',
        'sender',
        'title',
        'content',
        'time',
        'date',
        'location',
        'category'
    ];
    protected $table = 'laporan';
}
