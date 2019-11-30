
	<div id="header">
            <div class="header-top">
                <div class="container">
                    <div class="pull-left auto-width-left">
                        <ul class="top-menu menu-beta l-inline">
                            <li><a href=""><i class="fa fa-home"></i> Hành Phước, Nghĩa Hành, Quảng Ngãi</a></li>
                            <li><a href=""><i class="fa fa-phone"></i> Thoa Đặng: 0908618179 </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- .container -->
            </div> <!-- .header-top -->
            <div class="header-body">
                <div class="container beta-relative">
                    <div class="pull-left">
                        <a href="index" id="logo"><img src="source/assets/dest/images/logo1.jpg" width="200px" alt=""></a>
                    </div>
                    <div class="pull-right beta-components space-left ov">
                        <div class="space10">&nbsp;</div>
                        <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="{{route('search')}}">
                                <input type="text" value="" name="key" placeholder="Nhập từ khóa..." />
                                <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                            </form>
                        </div>
    
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- .container -->
            </div> <!-- .header-body -->
            <div class="header-bottom" style="background-color: #0277b8;">
                <div class="container">
                    <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                    <div class="visible-xs clearfix"></div>
                    <nav class="main-menu">
                        <ul class="l-inline ov">
                        <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                        <li><a href="{{route('trang-chu')}}">Sản phẩm</a>
                                <ul class="sub-menu">
                                    @foreach($loai_sp as $loai)
                                <li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->Tenloaicay}}</a></li>
                                    @endforeach    
                                </ul>
                            </li>
                        <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
                            <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div> <!-- .container -->
            </div> <!-- .header-bottom -->
        </div> <!-- #header --> 