<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "tb_pelanggan";

    protected $primaryKey = 'pel_id';

    protected $fillable = ['pel_id', 'pel_nama', 'pel_ktp', 'pel_id_gol', 'pel_hp', 'pel_seri', 'pel_meteran', 'pel_aktif', 'pel_id_user', 'pel_alamat', 'pel_no' ];

}
