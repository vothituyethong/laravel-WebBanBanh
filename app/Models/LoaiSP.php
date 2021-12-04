<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    use HasFactory;
    protected $table='LoaiSP';
    protected $fillable = [
        'tenloai',
        'nhacungcap',
        'trangthai',
    ];
    public function nhacungcap(){
        return $this->belongsTo('App\Models\Nhacungcap', 'nhacungcap', 'id');
    }

    public function sanpham()
    {
        return $this->hasMany('App\Models\SanPham', 'id');
    }
}
