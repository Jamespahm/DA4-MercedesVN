<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MercedesVN - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/Logo-icon.svg') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font/fontawesome-free-6.2.1-web/css/all.css') }}">

</head>

<body class="js-body-fixed">
    <div id="main">

        @include('Share.header_layout')

        @yield('content')

        @include('Share.footer_layout')

        <!-- MODAL-MENU-HEADER -->
        <div class="modal js-modal">
            <div class="modalNav-container js-modalNav-models">
                <div class="modalNav-close js-modalNav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <div class="modalNav-title">Các dòng xe</div>
                <div class="modalNav-nav">
                    <ul class="nav-list">
                        <li class="nav-link"><a href="{{ route('productlist') }}">Tất cả các dòng xe</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Sedan</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Xe địa hình / SUV</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Coupé</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Xe đa dụng</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Mercedes-EQ</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Mercedes-AMG</a></li>
                        <li class="nav-link"><a href="{{ route('productlist') }}">Mercedes-Mayback</a></li>
                    </ul>
                </div>
            </div>

            <div class="modalNav-container js-modalNav-buy-onl">
                <div class="modalNav-close js-modalNav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modalNav-title">Mua trực tuyến</div>
                <div class="modalNav-nav">
                    <ul class="nav-list">
                        <li class="nav-link"><a href="#">Xe mới</a></li>
                        <li class="nav-link"><a href="#">Xe đã qua sử dụng</a></li>
                        <li class="nav-link"><a href="#">Phụ kiện chính hãng</a></li>
                        <li class="nav-link"><a href="#">Bộ sưu tập Mercedes-Benz</a></li>
                    </ul>
                </div>
            </div>

            <div class="modalNav-container js-modalNav-guide">
                <div class="modalNav-close js-modalNav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modalNav-title">Tư vấn mua xe</div>
                <div class="modalNav-nav">
                    <ul class="nav-list">
                        <li class="nav-link"><a href="#">Ưu đãi hiện có</a></li>
                        <li class="nav-link"><a href="#">Chọn cấu hình xe</a></li>
                        <li class="nav-link"><a href="#">Đăng ký lái thử</a></li>
                        <li class="nav-link"><a href="#">Danh sách Nhà Phân Phối</a></li>
                        <li class="nav-link"><a href="#">Bảng giá & brochure</a></li>
                        <li class="nav-link">
                            <a href="#">Khối doanh nghiệp & khách hàng ưu tiên</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="modalNav-container js-modalNav-service">
                <div class="modalNav-close js-modalNav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modalNav-title">Dịch vụ</div>
                <div class="modalNav-nav">
                    <ul class="nav-list">
                        <li class="nav-link"><a href="#">Ưu đãi đặc biệt</a></li>
                        <li class="nav-link"><a href="#">Đặt hẹn dịch vụ trực tuyến</a></li>
                        <li class="nav-link"><a href="#">Dịch vụ & bảo dưỡng</a></li>
                        <li class="nav-link"><a href="#">Bảo hành & Bảo hiểm</a></li>
                        <li class="nav-link"><a href="#">Phụ tùng & dầu chính hãng</a></li>
                        <li class="nav-link"><a href="#">Phong cách sống Mercedes</a></li>
                    </ul>
                </div>
            </div>

            <div class="modalNav-container js-modalNav-mercedes">
                <div class="modalNav-close js-modalNav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modalNav-title">Thế giới Mercedes-Benz</div>
                <div class="modalNav-nav">
                    <ul class="nav-list">
                        <li class="nav-link"><a href="{{ route('news') }}">Hệ thống đa phương tiện MBUX</a></li>
                        <li class="nav-link"><a href="{{ route('news') }}">Sáng tạo & công nghệ</a></li>
                        <li class="nav-link"><a href="{{ route('news') }}">Thiết kế & xe ý tưởng</a></li>
                        <li class="nav-link"><a href="{{ route('news') }}">Phát triển bền vững</a></li>
                        <li class="nav-link"><a href="{{ route('news') }}">Về Mercedes-Benz Việt Nam</a></li>
                        <li class="nav-link"><a href="{{ route('news') }}">Xe Mercedes-AMG</a></li>
                    </ul>
                </div>
            </div>

            <!-- MODAL LOGIN -->

            <div class="modalLogin modalLogin--login js-modalLogin--login">
                <div class="modalLogin-contain">
                    <div class="modalLogin--title">Đăng nhập Mercedes Me</div>
                    <p>Bạn chưa có tài khoản?<br />Đăng ký <a href="{{ route('register') }}">tại đây</a></p>
                    <a href="{{ route('login') }}" class="btn btn__primary">Đăng nhập</a>
                </div>
            </div>

            <div class="modalLogin modalLogin--bookMark js-modalLogin--bookMark">
                <div class="modalLogin-contain">
                    <div class="modalLogin--title">Danh mục đã lưu</div>
                    <p>
                        Hãy lòng đăng nhập trước!<br />Hoặc đăng ký <a href="{{ route('register') }}">tại đây</a>
                    </p>
                    <a href="{{ route('login') }}" class="btn btn__primary">Đăng nhập</a>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/productlist.js') }}"></script>

    </div>
</body>

</html>
