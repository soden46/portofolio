<?php

namespace App\Models;

use App\Controller\Email\HubungiEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Hubungi extends Model
{
    use HasFactory;

    protected $table = "hubungi";
    public $fillable = ['nama', 'email', 'subjek', 'pesan'];
}
