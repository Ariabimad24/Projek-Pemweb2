<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabKota extends Model
{
    use HasFactory;

    protected $table = 'kabkota';
    protected $fillable = ['id', 'nama', 'latitude', 'longitude', 'provinsi_id'];

    //disable created_at and updated_at field
    public $timestamps = false;

    public function provinsi(){
        return $this->belongsTo(Provinsi::class); //belongsTo -> one to many
    }
}
