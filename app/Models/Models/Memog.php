<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memog extends Model
{
    // テーブル名
    protected $table = 'memogs';

    // 可変項目
    protected $fillable = 
    [
        'title',
        'content'
    ];
    use HasFactory;
}
