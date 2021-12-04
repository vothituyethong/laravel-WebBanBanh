<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table='nhacungcap';
    protected $fillable = [
        'tenncc',
        'diachi',
        'trangthai',
    ];
    public function loaisp(){
        return $this->hasMany('App\Models\LoaiSP', 'nhacungcap');
    }
}

