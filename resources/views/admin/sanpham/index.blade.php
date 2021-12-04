@extends('admin.sanpham.sidebar')
@section('content')

<div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('sanpham.create')}}" class="btn btn-success">Thêm mới</a>
</div>
<table class="table table-hover">
  <thead>
  <tr>
    <th style="text-align:center">ID</th>
    <th style="text-align:center">Tên SP</th>
    <th style="text-align:center">Mã Loại</th>
    <th style="text-align:center">Danh Mục</th>
    <th style="text-align:center">Giá</th>
    <th style="text-align:center">Giá Mới</th>
    <th style="text-align:center">Image</th>
    <th style="text-align:center">Size</th>
    <th style="text-align:center">Số Lượng</th>
    <th style="text-align:center">Mô Tả</th>
    <th style="text-align:center">Trạng Thái</th>

  </tr>
  @foreach($sanphams ?? '' as  $sanpham)
          <tr>
           <td style="text-align:center">{{$sanpham->id}}</td>
           <td style="text-align:center">{{$sanpham->TenSP}}</td>
           <td style="text-align:center"> {{$sanpham->MaLoai}}</td>
           <td style="text-align:center"> {{$sanpham->DanhMuc}}</td>
           <td style="text-align:center">{{number_format($sanpham->Gia)}}</td>
           <td style="text-align:center">{{number_format($sanpham->GiaMoi)}}</td>
           <td><img class="img-thumbnail" style="height:50px;" src="{{asset('image/'.$sanpham->Image)}}"></td>
           <td style="text-align:center">{{$sanpham->Size}}</td>
           <td style="text-align:center">{{$sanpham->SoLuong}}</td>
           <td style="text-align:center">{{$sanpham->Mota}}</td>
           <td style="text-align:center">{{$sanpham->TrangThai}}</td>
           <td>
             <form action="{{route('sanpham.destroy', $sanpham->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('sanpham.edit',$sanpham->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
           </td>
             </form>
 @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@stop
  