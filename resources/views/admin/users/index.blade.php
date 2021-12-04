@extends('admin.users.sidebar')
@section('content')

<table class="table table-hover">
  <thead>
  <tr>
    <th style="text-align:center">Id</th>
    <th style="text-align:center">Password</th>
    <th style="text-align:center">Họ Tên</th>
    <th style="text-align:center">Địa Chỉ</th>
    <th style="text-align:center">Số Điện Thoại</th>
    <th style="text-align:center">Email</th>
    <th style="text-align:center">Loại</th>
    <th style="text-align:center">Trạng Thái</th>
  </tr>
  @foreach($users ?? '' as  $user)
          <tr>
          <td style="text-align:center">{{$user->id}}</td>
           <td style="text-align:center">{{$user->password}}</td>
           <td style="text-align:center">{{$user->hoten}}</td>
           <td style="text-align:center">{{$user->diachi}}</td>
           <td style="text-align:center">{{$user->sdt}}</td>
           <td style="text-align:center">{{$user->email}}</td>
           <td style="text-align:center">{{$user->loai}}</td>
           <td style="text-align:center">{{$user->trangthai}}</td>
           <td>
           <form action="{{route('users.destroy', $user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
           </td>
             </form>
 @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@stop
  