        <div id="header" class="js-header">
            <div id="header-top">
                <a href="{{ route('index') }}">
                    <img class="header--logo" src="{{ asset('img/logo/Mercedes-logo1.png') }}" alt="" />
                </a>

                <a href="#" class="header--btn js-btn-login" style="margin-right: 100px">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="#" class="header--btn js-btn-bookmark">
                    <i class="fa-solid fa-bookmark"></i>
                </a>
                <a href="{{ route('cart') }}" class="header--btnn ">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>

                <div class="header--search js-header-search">
                    <input type="text" class="header--search-box js-header--search-box" required name=""
                        id="" placeholder="Từ khóa tìm kiếm / OnlineCode từ công cụ chọn cấu hình xe" />
                    <button class="header--search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>

            <div id="header-nav">
                <ul class="js-headerNav">
                    <li class="js-btn-models js-header-nav">
                        <a id="" href="#">Các dòng xe</a>
                    </li>
                    <li class="js-btn-buy-onl js-header-nav">
                        <a id="" href="#">Mua trực tuyến</a>
                    </li>
                    <li class="js-btn-guide js-header-nav">
                        <a id="" href="#">Tư vấn mua xe</a>
                    </li>
                    <li class="js-btn-service js-header-nav">
                        <a id="" href="#">Dịch vụ</a>
                    </li>
                    <li class="js-btn-mercedes js-header-nav">
                        <a id="" href="#">Thế giới Mercedes-Benz</a>
                    </li>
                </ul>
            </div>
        </div>
