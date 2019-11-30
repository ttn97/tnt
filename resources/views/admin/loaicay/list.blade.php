@extends('admin.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại Cây Cảnh
                        <small>List</small>
                    </h1>
                </div>

                    @if(count($errors) > 0)
                        <div class=alert alert-success style="color:red;font-size:25px;text-align:center">
                        @foreach($errors->all() as $er )
                            {{$er}} <br>
                        @endforeach
                        </div>
                    @endif
                
                    @if(session('notice'))
                        <div class=alert alert-success style="color:red;font-size:25px;text-align:center">
                        {{session('notice')}}
                        </div>
                    @endif

                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên Loại cây</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($type_product as $type)
                        <tr class="odd gradeX" align="center">
                            <td>{{$type->id}}</td>
                            <td>{{$type->Tenloaicay}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/typeproduct/delete/{{$type->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/typeproduct/edit/{{$type->id}}">Edit</a></td>
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