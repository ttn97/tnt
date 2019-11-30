@extends('admin.index')
@section('content')


    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Cây cảnh
                            <small>Add</small>
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

                    <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo url('admin/typeproduct/add');?>" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>Loại cây cảnh</label>
                                <input class="form-control" name="Tenloaicay" placeholder="Hãy thêm tên loại cây cảnh" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm loại cây cảnh</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <!-- /#page-wrapper -->
    
@endsection