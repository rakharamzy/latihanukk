<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Belongsto;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pelanggaran'; 
    public $timestamps = false;

    public function siswa():BelongsTo
    {
        return $this->belongsTo(Siswa::class,'nis','nis');
    }
    public function tanggapan():HasOne 
    {
        return $this->hasOne(Tanggapan::class,'id_pelanggaran','id_pelanggaran');
    }
}
