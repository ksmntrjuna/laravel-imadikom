<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'dokumentasi';
    protected $fillable = ['nama', 'deskripsi', 'tanggal', 'tempat', 'foto'];

   public function getFotoUrlAttribute()
{
    if ($this->foto) {
        return Storage::disk('local')->url('dokumentasi/' . $this->foto);
    }
    // Jika tidak ada foto, kembalikan URL default atau kosong sesuai kebutuhan Anda
    return ''; // atau return asset('path/to/default/image.jpg');
}

}
