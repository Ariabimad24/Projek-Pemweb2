<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Faskes extends Model
{
    use HasFactory;
    
    protected $table = 'jenis_faskes';
    protected $fillable = ['id', 'nama'];

    public $timestamps = false;

}
