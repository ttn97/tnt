@extends('admin.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Cây Cảnh
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên cây cảnh</th>
                            <th>Mô Tả</th>
                            <th>Nội Dung</th>
                            <th>giá đúng</th>
                            <th>giá khuyến mãi</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $pro)
                        <tr class="odd gradeX" align="center">
                            <td>{{$pro->id}}</td>
                            <td>{{$pro->TenCay}}</td>
                            <td>{{$pro->MoTa}}</td>
                            <td>{{$pro->NoiDung}}</td>
                            <td>{{$pro->gia1}}</td>
                            <td>{{$pro->gia1}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$pro->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$pro->id}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection