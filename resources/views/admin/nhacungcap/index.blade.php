@extends('admin.nhacungcap.sidebar')
@section('content')
<div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('nhacungcap.create')}}" class="btn btn-success">Thêm mới</a>
</div>
<table class="table table-hover">
  <thead>
  <tr>
    <th style="text-align:center">Tên Nhà Cung Cấp</th>
    <th style="text-align:center">Địa Chỉ</th>
    <th style="text-align:center">Trạng Thái</th>

  </tr>
  @foreach($nhacungcap ?? '' as  $ncc)
          <tr>
           <td style="text-align:center">{{$ncc->tenncc}}</td>
           <td style="text-align:center">{{$ncc->diachi}}</td>
           <td style="text-align:center">{{$ncc->trangthai}}</td>
           <td>
             <form action="{{route('nhacungcap.destroy', $ncc->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('nhacungcap.edit',$ncc->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
           </td>
             </form>
 @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@stop
  