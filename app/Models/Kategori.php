<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori_umkm';
    protected $fillable = ['id', 'nama'];

    public function pembina(){
        return $this->belongsTo(Pembina::class); //belongsTo -> one to many
    }
}
