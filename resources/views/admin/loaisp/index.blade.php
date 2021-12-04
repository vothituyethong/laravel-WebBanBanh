@extends('admin.loaisp.sidebar')
@section('content')
<div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('loaisp.create')}}" class="btn btn-success">Thêm mới</a>
</div>
<table class="table table-hover">
  <thead>
  <tr>
    <th style="text-align:center">Tên Loại Sản Phẩm</th>
    <th style="text-align:center">Nhà Cung Cấp</th>
    <th style="text-align:center">Trạng Thái</th>

  </tr>
  @foreach($cates ?? '' as  $cate)
          <tr>
           <td style="text-align:center">{{$cate->tenloai}}</td>
           <td style="text-align:center">{{$cate->nhacungcap}}</td>
           <td style="text-align:center">{{$cate->trangthai}}</td>
           <td>
             <form action="{{route('loaisp.destroy', $cate->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('loaisp.edit',$cate->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
           </td>
             </form>
 @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@stop
  