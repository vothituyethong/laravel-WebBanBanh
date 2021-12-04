@extends('admin.danhmuc.sidebar')
@section('content')
<div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('danhmuc.create')}}" class="btn btn-success">Thêm mới</a>
</div>
<table class="table table-hover">
  <thead>
  <tr>
    <th style="text-align:center">ID</th>
    <th style="text-align:center">Tên Danh Mục</th>
    <th style="text-align:center">Trạng Thái</th>

  </tr>
  @foreach($danhmucs ?? '' as  $danhmuc)
          <tr>
           <td style="text-align:center">{{$danhmuc->id}}</td>
           <td style="text-align:center">{{$danhmuc->TenDanhMuc}}</td>
           <td style="text-align:center">{{$danhmuc->TrangThai}}</td>
           <td>
             <form action="{{route('danhmuc.destroy', $danhmuc->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('danhmuc.edit',$danhmuc->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
           </td>
             </form>
 @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@stop
  