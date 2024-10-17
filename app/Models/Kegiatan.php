<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'pembina_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'pembina_id');
    }
    public function pembina()
    {
        return $this->belongsTo(Pembina::class);
    }
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kegiatan_id');
        return $this->hasMany(Siswa::class);
    }
    public function presensi()
    {
        return $this->hasMany(Presensi::class);
        return $this->belongsToMany(Siswa::class, 'kegiatan_siswa', 'kegiatan_id', 'siswa_id');
        return $this->hasMany(Siswa::class);
        return $this->belongsTo(Siswa::class);
    }
}
