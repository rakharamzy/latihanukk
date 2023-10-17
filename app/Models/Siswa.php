<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'siswa'; //agar nama table tetap 
    public $times = false;

    public function pelanggaran () : hasmany
    {
        return $this->hasMany(pelanggaran::class,'nis','nis'); 
    } 
}
