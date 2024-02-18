<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
{{-- <script src="{{ asset('js/productlist.js') }}"></script> --}}

@extends('Share.layout')

@section('title', 'Danh sách xe')

@section('content')
    <div id="content">
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
                <div style="padding-bottom: 120px" class="pagination" style="text-align: center;">
                    <button id="prev-btn"> <i class="fa-solid fa-chevron-left"></i> Trước</button>
                    <span id="page-num"></span>
                    <button id="next-btn">Sau <i class="fa-solid fa-chevron-right"></i></button>
                </div>

            </div>
        </div>
    </div>


@endsection
