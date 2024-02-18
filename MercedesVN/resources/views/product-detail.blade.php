<link rel="stylesheet" type="text/css" href="{{ asset('css/productdetail.css') }}">

@extends('Share.layout')

@section('title', 'Chi Tiết Xe')

@section('content')
    <div id="content">
        <div class="product">
            <div class="product-img">
                <img class="product-img__main" src="/img/list-car/{{ $chitietxe->HinhAnh1 }}" alt="">
                <div class="product-img__sub">
                    <div class="img__small img-active">
                        <img src="/img/list-car/{{ $chitietxe->HinhAnh1 }}" alt="">
                    </div>
                    <div class="img__small">
                        <img src="/img/list-car/{{ $chitietxe->HinhAnh2 }}" alt="">
                    </div>
                    <div class="img__small">
                        <img src="/img/list-car/{{ $chitietxe->HinhAnh3 }}" alt="">
                    </div>
                    <div class="img__small">
                        <img src="/img/list-car/{{ $chitietxe->HinhAnh4 }}" alt="">
                    </div>
                </div>
            </div>


            <div class="product-overview">
                <h2 class="product-overview--name">{{ $chitietxe->TenXe }}</h2>
                <div class="product-overview--price">
                    <p>Giá</p>
                    <p style="font-size: 25px; font-weight: 700;">{{ number_format($chitietxe->GiaTien, 0, ',', '.') }} đ
                    </p>
                </div>
                <div class="product-overview--characteristic">
                    <div class="product-overview--characteristic-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="product-overview--characteristic-item__icon "
                            viewBox="0 0 83.8 63.2">
                            <path
                                d="M59.1 63.2H31.7l-9.3-12.5h-8.7V40.3H7.3v10.2H0V22.2h7.3v10.9h6.4v-11h8.9l7.6-8.8H42v-6H30.8V0h29.9v7.3H49.3v5.9h12.1l10.7 12.4h11.7v31.6H63.5z">
                            </path>
                        </svg>
                        <span>150 kW(220 mã lực)</span>
                    </div>

                    <div class="product-overview--characteristic-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="product-overview--characteristic-item__icon "
                            viewBox="0 0 24 24">
                            <path
                                d="M20.707 5.707L18 3a12.75 12.75 0 0 0-1 1l2 2v3a1 1 0 0 0 1 1v7.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-6a1.5 1.5 0 0 0-1.5-1.5H15V3a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v17a1 1 0 0 0-1 1v1h13v-1a1 1 0 0 0-1-1v-9h1.5a.5.5 0 0 1 .5.5v6a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5V6.414a1 1 0 0 0-.293-.707zM13 4v6H6V4z">
                            </path>
                        </svg>
                        <span>{{ $chitietxe->NhienLieu }}</span>
                    </div>

                    <div class="product-overview--characteristic-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="product-overview--characteristic-item__icon "
                            viewBox="0 0 56.7 56.7">
                            <path d="M3.5 27.8h49.6V32H3.5z"></path>
                            <path
                                d="M7.738 1.912v30.1h-4.2v-30.1zm22.683-.045v53.1h-4.2v-53.1zm22.667-.063v53.1h-4.2v-53.1z">
                            </path>
                            <circle cx="5.6" cy="5.4" r="5.4"></circle>
                            <circle cx="28.3" cy="5.4" r="5.4"></circle>
                            <circle cx="51" cy="5.5" r="5.4"></circle>
                            <circle cx="28.3" cy="51.3" r="5.4"></circle>
                            <circle cx="51" cy="51.3" r="5.4"></circle>
                        </svg>
                        <span>Hộp số {{ $chitietxe->HopSo }}</span>
                    </div>
                </div>

                <p class="product-overview--addtocart js-product-overview--addtocart btn__primary">Thêm vào giỏ hàng  <i class="fa-solid fa-cart-plus"></i></p>
                    <p class="product-overview--buybtn js-product-overview--buybtn btn__primary">Yêu cầu mua xe  <i class="fa-solid fa-credit-card"></i></p>

            </div>
        </div>




        <div class="details">
            <div class="detail-container">
                <h3 class="detail-title">THÔNG SỐ CHI TIẾT XE</h3>
                <ul class="detail-specs">
                    <li>Hệ thống giải trí MBUX thế hệ mới</li>
                    <li>Cụm đèn trước LED toàn phần</li>
                    <li>Sách hướng dẫn sử dụng bằng tiếng Việt</li>
                    <li>Camera lùi</li>
                    <li>Tấm che bảo vệ gầm</li>
                    <li>Bảng đồng hồ dạng kỹ thuật số với màn hình 12.3-inch</li>
                    <li>Hiển thị thông tin về dây đai của hàng ghế sau</li>
                    <li>Gương chiếu hậu bên ngoài chỉnh & gập điện</li>
                    <li>Hệ thống cảnh báo áp suất lốp</li>
                    <li>Hệ thống treo thích ứng AGILITY CONTROL</li>
                    <li>Tay lái 3 chấu bọc da với nút điều khiển cảm ứng</li>
                    <li>Cụm chuyển đổi DYNAMIC SELECT với nhiều chế độ vận hành</li>
                </ul>
                <ul class="detail-specs">
                    <li>Hệ thống phanh chủ động Active Brake Assist</li>
                    <li>Hệ thống PARKTRONIC</li>
                    <li>Tính năng gập ghế sau để chở đồ</li>
                    <li>Điều hòa khí hậu tự động 2 vùng</li>
                    <li>Hệ thống đèn viền trang trí nội thất</li>
                    <li>Màn hình giải trí 12.3 inch</li>
                    <li>Hiển thị thông tin về dây đai của hàng ghế sau</li>
                    <li>Điều hòa khí hậu tự động 2 vùng</li>
                    <li>Ghế lái xe có thể tùy chỉnh bằng điện cùng với bộ nhớ</li>
                    <li>Chức năng kiểm soát tốc độ Cruise Control với SPEEDTRONIC</li>
                    <li>vùngLốp xe runflat</li>
                    <li>Gói trang bị ghế ngồi</li>
                </ul>
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
    {{-- <div class="modal js-modal"> --}}

        <div class="modalForm js-modalForm">

            <div class="modalNav-close js-modalNav-close">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <div class="container">
                <p>Vui lòng cung cấp thông tin liên hệ của bạn để chúng tôi có thể tư vấn theo đúng nhu cầu</p>
                <form action="{{ route('checkout') }}" method="post">
                    <div class="form-group">
                        <input type="text" id="txtname" name="txtname" autocomplete="off" required placeholder="Họ và Tên *">
                    </div>
                    <div class="form-group">
                        <input type="text" id="txtaddress" name="txtaddress" autocomplete="off" required placeholder="Địa Chỉ *">
                    </div>
                    <div class="form-group">
                        <input type="tel" id="txtphone" name="txtphone" autocomplete="off" required placeholder="Số Điện Thoại *">
                    </div>
                    <div class="form-group">
                        <input type="email" id="txtemail" name="txtemail" autocomplete="off" required placeholder="Địa Chỉ Email *">
                    </div>

                    <div class="form-group">
                        <div class="checkbox-wrapper">
                            <input type="checkbox" id="chkterms" name="chkterms" required>
                            <label for="chkterms">Tôi đã đọc và đồng ý với chính sách bảo vệ dữ liệu</label>
                        </div>
                    </div>


                    <input type="hidden" name="txtma" value="{{ $chitietxe->MaXe }}">
                    @csrf
                    <div class="form-group">
                        <button type="submit">Gửi Yêu Cầu</button>
                    </div>
                </form>
            </div>
        </div>



@endsection
