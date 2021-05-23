<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table="book";
    public $timestamps=false;
    protected $primarykey='idbook';
    protected $fillable=[
        'nama',
        'alamat email',
        'time',
        'keterangan'
    ];
}
