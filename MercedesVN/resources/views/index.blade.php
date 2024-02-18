<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

@extends('Share.layout')

@section('title', 'Trang chủ')

@section('content')

    <div id="banner">
        <div class="banner--mask"></div>
        <div class="banner--content">
            <h2>Quà Tặng Đặc Quyền</h2>
            <p>
                Chỉ trong tháng 3 & 4, cơ hội nhận 2 năm bảo hiểm MBI (Mercedes-Benz
                Insurance) cùng những đặc quyền vượt trội cho khách hàng mua xe
                Mercedes-Benz
            </p>
            <div class="content--container">
                <div class="btn content--btn__choose-car">
                    Chọn xe có sẵn cùng ưu đãi
                </div>
                <div class="btn btn__primary">Khám phá ưu đãi</div>
            </div>
        </div>
    </div>

    <div id="content">
        <div id="content-function">
            <div class="content--title text-white">Tìm hiểu thêm</div>

            <div class="content-function--contain">
                <div class="function">
                    <div class="function--img">
                        <img src="/img/function-img/function-img(1).webp" alt="" />
                    </div>

                    <div class="function--body">
                        <h4>Nhận xe báo giá tại đại lý</h4>
                        <p>Tìm xe có sẵn tại đại lý và nhận báo giá</p>
                        <div class="btn btn__primary">Tìm xe có sẵn</div>
                    </div>
                </div>

                <div class="function">
                    <div class="function--img">
                        <img src="img/function-img/function-img(2).webp" alt="" />
                    </div>

                    <div class="function--body">
                        <h4>Đặt hẹn dịch vụ trực tuyến</h4>
                        <p>Đặt lịch hẹn dịch vụ trực tuyến một cách thuận tiện</p>
                        <div class="btn btn__primary">Đặt lịch hẹn</div>
                    </div>
                </div>

                <div class="function">
                    <div class="function--img">
                        <img src="/img/function-img/function-img(3).webp" alt="" />
                    </div>

                    <div class="function--body">
                        <h4>Mercedes-Maybach S-Class</h4>
                        <p>Một tuyệt tác vượt thời gian</p>
                        <div class="btn btn__primary">Khám phá ngay</div>
                    </div>
                </div>

                <div class="function">
                    <div class="function--img">
                        <img src="/img/function-img/function-img(4).webp" alt="" />
                    </div>

                    <div class="function--body">
                        <h4>Mercedes-Benz C-Class thế hệ mới</h4>
                        <p>Đây là thế giới của tôi</p>
                        <div class="btn btn__primary">Tìm hiểu thêm</div>
                    </div>
                </div>

            </div>
        </div>

        <div id="content-model">
            <div class="content--title">Các dòng xe Mercedes-Benz</div>

            <div class="content-model--contain">
                <div class="content-model--nav">
                    <button type="" class="content-model--nav-btn js-content-model--nav-btn nav-btn__black">Tất
                        cả các dòng xe</button>
                    <button type="" class="content-model--nav-btn js-content-model--nav-btn">MERCEDES-EQ</button>
                    <button type="" class="content-model--nav-btn js-content-model--nav-btn">AMG</button>
                    <button type="" class="content-model--nav-btn js-content-model--nav-btn">MAYBACK</button>
                </div>

                <div class="row">
                    <div class="content-model--sidebar-left">
                        <div class="row">
                            <h3>Loại nhiên liệu</h3>
                            <div class="side-bar--checkbox">
                                <input type="checkbox" name="elec" id="" />
                                <p>Điện</p>
                              </div>
                        </div>
                        <div class="row">
                            <h3>Loại thân xe</h3>
                            @foreach($LoaiXe as $item)
                            <a href="#" >{{$item->TenLoaiXe}}</a>
                            @endforeach
                            <a>Xem tất cả</a>
                        </div>
                    </div>

                    <div id="car-list">
                        <div class="content-model--listcar">
                            @foreach ($Xe as $item)
                                <div class="car">
                                    <h3 class="car-name">{{ $item->TenXe }} </h3>
                                    <p class="car-price">Giá từ {{ number_format($item->GiaTien, 0, ',', '.') }} đ</p>
                                    <a href="{{ route('productDetail', $item->MaXe) }}" class="car-img">
                                        <img src="/img/list-car/{{ $item->HinhAnh }}" alt="" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pagination" style="text-align: center;">
                    <button id="prev-btn"> <i class="fa-solid fa-chevron-left"></i> Trước</button>
                    <span id="page-num"></span>
                    <button id="next-btn">Sau <i class="fa-solid fa-chevron-right"></i></button>
                </div>

            </div>
        </div>

        <div id="content-service">
            <ul class="content-service--contain">
                <li class="service--service">
                    <a href="#" class="service--item">
                        <div class="item--icon">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="item--content">
                            <h3>Đăng ký lái thử</h3>
                            <p>Đặt lịch hẹn lái tử tại nhà phân phối</p>
                        </div>
                    </a>
                </li>

                <li class="service--service">
                    <a href="#" class="service--item">
                        <div class="item--icon">
                            <i class="fa-solid fa-rectangle-list"></i>
                        </div>
                        <div class="item--content">
                            <h3>Bảng giá & Brochure</h3>
                            <p>Tải về bảng giá & brochure</p>
                        </div>
                    </a>
                </li>

                <li class="service--service">
                    <a href="#" class="service--item">
                        <div class="item--icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="item--content">
                            <h3>Tìm xe có sẵn</h3>
                            <p>Tìm xe có sẵn và nhận báo giá</p>
                        </div>
                    </a>
                </li>

                <li class="service--service">
                    <a href="#" class="service--item">
                        <div class="item--icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <div class="item--content">
                            <h3>Công cụ cấu hình xe</h3>
                            <p>Chọn cấu hình xe bạn mong muốn</p>
                        </div>
                    </a>
                </li>

                <li class="service--service">
                    <a href="#" class="service--item">
                        <div class="item--icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="item--content">
                            <h3>Đặt lịch hẹn dịch vụ</h3>
                            <p>Đặt lịch hẹn dịch vụ tại đại lý</p>
                        </div>
                    </a>
                </li>

                <li class="service--service">
                    <a href="#" class="service--item">
                        <div class="item--icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="item--content">
                            <h3>Liên hệ</h3>
                            <p>Yêu cầu tư vấn</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

@endsection
