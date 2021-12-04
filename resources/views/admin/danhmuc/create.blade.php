@extends('admin.danhmuc.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('danhmuc.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên Danh Mục</label>
                                        <input type="text" class="form-control" name="TenDanhMuc" placeholder="Tên Danh Mục" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="TrangThai" class="form-control" placeholder="Trạng thái">
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
