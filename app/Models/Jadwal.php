<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $dates = ['mulai', 'selesai'];
    protected $fillable = [
        'nama_kegiatan',
        'mulai',
        'selesai',
        'tempat',
        'status',
    ];

    public function updateStatus()
    {
        $now = Carbon::now();
        $mulai = Carbon::parse($this->mulai);
        $selesai = Carbon::parse($this->selesai);

        if ($now < $mulai) {
            $this->status = 'belum dilaksanakan';
        } elseif ($now >= $mulai && $now <= $selesai) {
            $this->status = 'sedang berlangsung';
        } else {
            $this->status = 'selesai';
        }

        // Simpan perubahan status ke database
        $this->save();
    }

}
