@extends('admin.hoadon.sidebar')
@section('content')

<table class="table table-hover">
  <thead>
  <tr>
    <th style="text-align:center">User_Id</th>
    <th style="text-align:center">Họ Tên</th>
    <th style="text-align:center">Địa Chỉ</th>
    <th style="text-align:center">Số Điện Thoại</th>
    <th style="text-align:center">Tổng Tiền</th>
    <th style="text-align:center">Trạng Thái</th>
  </tr>
  @foreach($hoadons ?? '' as  $hoadon)
          <tr>
          <td style="text-align:center">{{$hoadon->user_id}}</td>
           <td style="text-align:center">{{$hoadon->hoten}}</td>
           <td style="text-align:center">{{$hoadon->diachi}}</td>
           <td style="text-align:center">{{$hoadon->sdt}}</td>
           <td style="text-align:center">{{$hoadon->thanhtien}}</td>
           <td style="text-align:center">{{$hoadon->trangthai}}</td>
           <td>
             <form action="{{route('hoadon.destroy', $hoadon->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('hoadon.edit',$hoadon->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
           </td>
             </form>
 @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@stop
  