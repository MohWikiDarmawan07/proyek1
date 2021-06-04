<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'book';
    public $timestaps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nama' ,
        'Email',
        'Day' ,
        'Time' ,
        'Dokter' ,
        'Keterangan' ,
    ];
    use HasFactory;
}
