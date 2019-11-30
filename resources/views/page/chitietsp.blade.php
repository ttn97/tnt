@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
        <h6 class="inner-title">Sản phẩm {{$sanpham->TenCay}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Trang Chủ</a> / <span>Thông tin chi tiết Sản Phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="source/image/product/lan2.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-price">
                            <span>giá sản phẩm : {{$sanpham->gia1}}đ</span>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                        <p>{{$sanpham->MoTa}}</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô Tả</a></li>
                        <li><a href="#tab-reviews">Nội Dung</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                    <p>{{$sanpham->MoTa}}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                    <p>{{$sanpham->NoiDung}}</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản phẩm liên quan</h4>

                    <div class="row">
                        @foreach($sp_tuongtu as $tt)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                <div class="single-item-header">
                                    <a href="{{route('chitietsanpham',$tt->id)}}"><img src="source/image/product/lan2.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$tt->TenCay}}</p>
                                    <p class="single-item-price">
                                    <span class="flash-del">{{$tt->gia1}}đ</span>
                                    <span class="flash-sale">{{$tt->gia2}}đ</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="{{route('chitietsanpham',$tt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div> <!-- .beta-products-list -->
            </div>

            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm mới</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">

                            @foreach($new_caycanh as $new)

                            <div class="media beta-sales-item">
                            <a class="pull-left" href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/lan1.jpg" alt=""></a>
                                <div class="media-body">
                                        {{$new->TenCay}}
                                <span class="beta-sales-price">{{$new->gia1}}đ</span>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
