<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $fillable = [
        'judul',
        'user',
        'isi',
        'kutipan',
        'foto',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'id';
}
