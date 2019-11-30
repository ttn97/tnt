@extends('master')
@section('content')
<div class="container">
    <div id="content">
        
    <form action="{{route('login')}}" method="post" class="beta-form-checkout">

        @if(count($errors) > 0)
            <div class=alert alert-success style="color:red;font-size:25px;text-align:center">
            @foreach($errors->all() as $er )
                {{$er}} <br>
            @endforeach
            </div>
        @endif

        @if(session('notice'))
            <div style="color:red;text-align:center;font-size:25px;">{{session('notice')}}</div>
        @endif    
            <div class="row">
                <div class="col-sm-3"></div>
            @csrf

                <div class="col-sm-6">
                    <h4>Đăng nhập</h4>
                    <div class="space20">&nbsp;</div>
                    
                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-block">
                        <label for="password">Password*</label>
                        <input type="text" name="password" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection