<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table='sanpham';
    protected $fillable = [
        'TenSP',
        'MaLoai',
        'DanhMuc',
        'Gia',
        'GiaMoi',
        'Image',
        'Size',
        'SoLuong',
        'MoTa',
        'TrangThai',
    ];
    public function loaisp()
    {
        return $this->belongsTo('App\Models\LoaiSP','MaLoai','id');
    }

}
