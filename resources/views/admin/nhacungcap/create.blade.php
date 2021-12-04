@extends('admin.nhacungcap.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('nhacungcap.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên Nhà Cung Cấp</label>
                                        <input type="text" class="form-control" name="tenncc" placeholder="Tên Nhà Cung Cấp" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>
                                        <input type="text" class="form-control" name="diachi" placeholder="Địa Chỉ">
                                    </div>
                                </div>
                            
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="trangthai" class="form-control" placeholder="Trạng thái">
                                    </div>
                                </div>
                            
                            </div>

                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Thêm</button>
                    {{csrf_field()}}
                    </form>
                    </div>
                </div>
            </div>
        </div>
 </div>
@stop
