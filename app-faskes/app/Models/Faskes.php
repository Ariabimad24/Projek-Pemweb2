<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    protected $table = 'faskes';
    protected $fillable = ['id', 'nama', 'nama_pengelola', 'alamat', 'website', 'email', 'rating', 'latitude', 'longitude', 'kabkota_id', 'kategori_id', 'jenis_faskes_id'];

    //disable created_at and updated_at field
    public $timestamps = false;

    public function kabkota(){
        return $this->belongsTo(KabKota::class); //belongsTo -> one to many
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class); //belongsTo -> one to many
    }

    public function jenis_faskes(){
        return $this->belongsTo(Jenis_Faskes::class); //belongsTo -> one to many
    }
}
