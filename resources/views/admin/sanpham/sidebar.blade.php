@extends('admin.layout')
@section('sidebar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Thanh Duy ADMIN</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{URL::to('/panel/sanpham')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Trang Chủ</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
   Zero
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>THÀNH PHẦN ADMIN</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            
            <h6 class="collapse-header">Trang Admin</h6>
            <a class="collapse-item" href="{{route('danhmuc.index')}}">Danh Mục</a>
            <a class="collapse-item" href="{{route('sanpham.index')}}">Sản Phẩm</a>
            <a class="collapse-item" href="{{route('loaisp.index')}}">Loại Sản Phẩm</a>
            <a class="collapse-item" href="{{route('nhacungcap.index')}}">Nhà Cung Cấp</a>
            <a class="collapse-item" href="{{route('hoadon.index')}}">Hóa Đơn</a>
            <a class="collapse-item" href="404.html">Chi Tiết Hóa Đơn</a>
            <a class="collapse-item" href="blank.html">User</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>
@stop