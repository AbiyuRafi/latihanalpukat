<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belis extends Model
{
    use HasFactory;
    protected $table = 'beli';
    protected $fillable = ['alamat','pesanan','deskripsi'];
}
