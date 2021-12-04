@extends('admin.loaisp.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('loaisp.update',$loaisp->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên Loại Sản Phẩm </label>
                                        <input type="text" class="form-control" name="tenloai" value="{{$loaisp->tenloai}}" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Nhà Cung Cấp</label>
                                        <input type="text" class="form-control" name="nhacungcap" value="{{$loaisp->nhacungcap}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="trangthai" class="form-control" value="{{$loaisp->trangthai}}">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
@stop
