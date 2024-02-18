CREATE Database MERC
go 

USE MERC; -- Thay TenCSDL bằng tên cơ sở dữ liệu của bạn
go
-- Bảng "Loại xe"
CREATE TABLE LoaiXe (
    MaLoaiXe INT IDENTITY(1,1) PRIMARY KEY,
    TenLoaiXe NVARCHAR(50) NOT NULL,
    MoTa NVARCHAR(500) 
);
-- Bảng "Xe"
CREATE TABLE Xe (
    MaXe INT IDENTITY(1,1) PRIMARY KEY,
    MaLoaiXe INT NOT NULL,
    TenXe NVARCHAR(50) NOT NULL,
	HinhAnh NVARCHAR(100) NOT NULL,
    MoTa NVARCHAR(500) NOT NULL,
    GiaTien FLOAT NOT NULL,
    SoLuong INT NOT NULL,
    NamSanXuat DATE NOT NULL,
    FOREIGN KEY (MaLoaiXe) REFERENCES LoaiXe(MaLoaiXe)
);

-- Bảng "Chi tiết xe"
CREATE TABLE ChiTietXe (
    MaChiTietXe INT IDENTITY(1,1) PRIMARY KEY,
    MaXe INT NOT NULL,
	HinhAnh1 NVARCHAR(100) ,
	HinhAnh2 NVARCHAR(100) ,
	HinhAnh3 NVARCHAR(100) ,
    MauNoiThat NVARCHAR(50) ,
	MauNgoaiThat NVARCHAR(50) ,
    HopSo NVARCHAR(50) ,
	DongCo NVARCHAR(20) ,
	Tocdotoida NVARCHAR(20),
	NhienLieu NVARCHAR(20),
    ChoNgoi INT ,
    FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);

-- Bảng "Khách hàng"
CREATE TABLE KhachHang (
    MaKhachHang INT IDENTITY(1,1) PRIMARY KEY,
    TenKhachHang NVARCHAR(50) NOT NULL,
    DiaChi NVARCHAR(500) NOT NULL,
    SoDienThoai NVARCHAR(20) NOT NULL,
    Email NVARCHAR(50) NOT NULL,
    NgayDangKy DATE NOT NULL
);

-- Bảng "Đơn bán"
CREATE TABLE DonBan (
    MaDonBan INT IDENTITY(1,1) PRIMARY KEY,
    MaKhachHang INT NOT NULL,
    NgayBan DATE NOT NULL,
    TongTien FLOAT NOT NULL,
    FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang)
);

-- Bảng "Chi tiết đơn bán"
CREATE TABLE CTDonBan (
    MaDonBan INT NOT NULL,
    MaXe INT NOT NULL,
    SoLuong INT NOT NULL,
    GiaBan FLOAT NOT NULL,
    PRIMARY KEY (MaDonBan, MaXe),
    FOREIGN KEY (MaDonBan) REFERENCES DonBan(MaDonBan),
    FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);

-- Bảng "Đơn đăng kí lái thử"
CREATE TABLE DonLaiThu (
    MaDonDangKi INT IDENTITY(1,1) PRIMARY KEY,
    MaKhachHang INT NOT NULL,
    NgayDangKi DATE NOT NULL,
    FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang)
);

-- Bảng "Chi tiết đơn đăng kí lái thử"
CREATE TABLE CTDonLaiThu (
    MaDonDangKi INT NOT NULL,
    MaXe INT NOT NULL,
	NgayLaiThu DATE NOT NULL,
    PRIMARY KEY (MaDonDangKi, MaXe),
    FOREIGN KEY (MaDonDangKi) REFERENCES DonLaiThu(MaDonDangKi),
    FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);

-- Bảng "Danh sách xe đã lưu"
CREATE TABLE DanhSachXeDaLuu (
    MaKhachHang INT NOT NULL,
    MaXe INT NOT NULL,
    PRIMARY KEY (MaKhachHang, MaXe),
    FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
    FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);



-- Bảng "Tài khoản"
CREATE TABLE TaiKhoan (
    MaTaiKhoan INT IDENTITY(1,1) PRIMARY KEY,
	TenNguoiDung NVARCHAR(100) NOT NULL,
    TenDangNhap NVARCHAR(50) NOT NULL,
    MatKhau NVARCHAR(50) NOT NULL,
	Email NVARCHAR(100) NOT NULL,
	SDT VARCHAR(10),
	LoaiTK NVARCHAR(50),
    NgayTao DATE 
);

-- Bảng "Loại Tin Tức"
CREATE TABLE LoaiTinTuc (
    MaLoaiTinTuc INT IDENTITY(1,1) PRIMARY KEY,
    TenLoaiTinTuc NVARCHAR(50) NOT NULL,
    MoTa NVARCHAR(500) 
);


-- Bảng "Tin Tức"
CREATE TABLE TinTuc (
    MaTinTuc INT IDENTITY(1,1) PRIMARY KEY,
	MaLoaiTinTuc INT NOT NULL,
    TieuDe NVARCHAR(50) NOT NULL,
	HinhAnh NVARCHAR(100) NOT NULL,
    NoiDung NVARCHAR(500) NOT NULL,
    NgayTao DATE NOT NULL,
	FOREIGN KEY (MaLoaiTinTuc) REFERENCES LoaiTinTuc(MaLoaiTinTuc)
);



-- Bảng "Loại xe"
INSERT INTO LoaiXe (TenLoaiXe, MoTa) VALUES
('Sedan', 'Xe 4 cửa, có khoang hành lý rộng'),
('SUV', 'Xe đa dụng thể thao'),
('Coupe', 'Xe 2 cửa, thể thao và sang trọng'),
('Cabriolet', 'Xe 2 cửa, có thể gập mui, thích hợp cho đi du lịch'),
('Roadster', 'Xe 2 cửa, thể thao và phù hợp cho lái mở màn'),
('Wagon', 'Xe có khoang hành lý dài, phù hợp cho chuyến đi dài'),
('Maybach', 'Xe hạng sang đặc biệt');

-- Bảng "Xe"
INSERT INTO Xe (MaLoaiXe, TenXe, HinhAnh, MoTa, GiaTien, SoLuong, NamSanXuat) VALUES
(1, 'EQS', 'EQS/eqs1.webp', 'Được coi là mẫu xe đại diện cho sự sang trọng và đẳng cấp', 4888000000, 20, '2022'),
(1, 'A-Class', 'A-Class/aclass1.webp', 'Được coi là mẫu xe đại diện cho sự sang trọng và đẳng cấp', 1888000000, 20, '2019'),
(1, 'C-Class', 'C-Class/c-class1.webp', 'Được coi là mẫu xe đại diện cho sự sang trọng và đẳng cấp', 2888000000, 20, '2023'),
(1, 'E-Class', 'E-Class/e-class1.webp', 'Được coi là mẫu xe đại diện cho sự sang trọng và đẳng cấp', 2500000000, 20, '2021'),
(1, 'S-Class', 'S-Class/s-class1.webp', 'Được coi là mẫu xe đại diện cho sự sang trọng và đẳng cấp', 5500000000, 20, '2020'),
(1, 'Mayback S-Class', 'S-Class-Mayback/s-classmb1.webp', 'Được coi là mẫu xe đại diện cho sự sang trọng và đẳng cấp', 8888000000, 20, '2021'),

(2, 'GLA SUV', 'GLA/gla1.webp', 'Mercedes-Benz GLA là một mẫu SUV hạng sang của hãng Mercedes-Benz, đa dụng thể thao được trang bị nhiều công nghệ tiên tiến', 3488000000, 25, '2022'),
(2, 'GLB SUV', 'GLB/glb1.webp', 'SUV cỡ trung phù hợp cho gia đình hoặc công việc', 2288000000, 30, '2022'),
(2, 'GLC SUV', 'GLC/glc1.webp', 'SUV hạng sang đầy đủ tính năng, không gian nội thất rộng rãi', 28880000000, 15, '2022'),
(2, 'GLE SUV', 'GLE/gle1.webp', 'Xe thể thao 2 cửa với tốc độ tối đa lên tới 300 km/h', 4888000000, 10, '2022'),
(2, 'GLS', 'GLS/gls1.webp', 'Coupe sang trọng, không gian nội thất rộng rãi và trang bị công nghệ tiên tiến', 5588000000, 15, '2022'),
(2, 'G-Class', 'G-Class/g-class1.webp', 'Xe 2 cửa có thể gập mui thích hợp cho đi du lịch', 118880000000, 10, '2022'),

(3, 'GLC Coupé', 'GLC-Coupe/glcc1.webp', 'Coupe sang trọng, không gian nội thất rộng rãi và trang bị công nghệ tiên tiến', 1888000000, 15, '2022'),
(3, 'GLE Coupé', 'GLE-Coupe/glec1.webp', 'Coupe sang trọng, không gian nội thất rộng rãi và trang bị công nghệ tiên tiến', 2888000000, 15, '2022');




-- Bảng "Chi tiết xe"
INSERT INTO ChiTietXe(MaXe, HinhAnh1, HinhAnh2, HinhAnh3, MauNoiThat, MauNgoaiThat, HopSo, DongCo, Tocdotoida, NhienLieu, ChoNgoi) VALUES
(1, 'sclass_1.png', 'sclass_2.png', 'sclass_3.png', 'Đen', 'Trắng', 'Tự động 9 cấp', '3.0L', '250 km/h', 'Xăng', 5),
(2, 'gle_1.png', 'gle_2.png', 'gle_3.png', 'Đen', 'Đỏ', 'Tự động 9 cấp', '2.0L', '240 km/h', 'Xăng', 7),
(3, 'cclass_1.png', 'cclass_2.png', 'cclass_3.png', 'Đỏ', 'Đen', 'Tự động 9 cấp', '2.0L', '240 km/h', 'Xăng', 4),
(1, 'sclass_1.png', 'sclass_2.png', 'sclass_3.png', 'Đen', 'Trắng', 'Tự động 9 cấp', '3.0L', '250 km/h', 'Xăng', 5),
(2, 'gle_1.png', 'gle_2.png', 'gle_3.png', 'Đen', 'Đỏ', 'Tự động 9 cấp', '2.0L', '240 km/h', 'Xăng', 7),
(3, 'cclass_1.png', 'cclass_2.png', 'cclass_3.png', 'Đỏ', 'Đen', 'Tự động 9 cấp', '2.0L', '240 km/h', 'Xăng', 4),
(1, 'sclass_1.png', 'sclass_2.png', 'sclass_3.png', 'Đen', 'Trắng', 'Tự động 9 cấp', '3.0L', '250 km/h', 'Xăng', 5),
(2, 'gle_1.png', 'gle_2.png', 'gle_3.png', 'Đen', 'Đỏ', 'Tự động 9 cấp', '2.0L', '240 km/h', 'Xăng', 7),
(3, 'cclass_1.png', 'cclass_2.png', 'cclass_3.png', 'Đỏ', 'Đen', 'Tự động 9 cấp', '2.0L', '240 km/h', 'Xăng', 4);

-- Bảng "Khách hàng"
INSERT INTO KhachHang(TenKhachHang, DiaChi, SoDienThoai, Email, NgayDangKy) VALUES
('Nguyễn Văn A', '123 Đường Hoàng Hoa Thám, TP.HCM', '0983456789', 'nguyenvana@gmail.com', '2023-04-12'),
('Lê Thị B', '456 Đường Nguyễn Văn Linh, TP.HCM', '0947654321', 'lethib@gmail.com', '2023-04-12'),
('Nguyễn Văn C', '23 Đường Hoàng Văn Thụ, HN', '0923421389', 'nguyenvanc@gmail.com', '2023-04-12'),
('Trần Thị D', '56 Đường Nguyễn Văn Long, HN', '0987564321', 'tranthid@gmail.com', '2023-04-12'),
('Phạm Thanh T', '66 Đường Nguyễn Văn Long, HN', '0987564652', 'phamthanhT@gmail.com', '2023-04-12');


-- Bảng "Đơn bán"
INSERT INTO DonBan (MaKhachHang, NgayBan, TongTien)
VALUES (1, '2022-01-03', 4988000000),
(2, '2022-01-04', 1988000000);

-- Bảng "Chi tiết đơn bán"
INSERT INTO CTDonBan (MaDonBan, MaXe, SoLuong, GiaBan)
VALUES (1, 1, 1, 1888000000),
(2, 2, 1, 1888000000);

-- Bảng "Đơn đăng kí lái thử"
INSERT INTO DonLaiThu (MaKhachHang, NgayDangKi)
VALUES (1, '2022-01-05'),
(2, '2022-04-06');


-- Bảng "Chi tiết đơn đăng kí lái thử"
INSERT INTO CTDonLaiThu (MaDonDangKi, MaXe, NgayLaiThu)
VALUES (1, 1, '2022-01-15'),
(2, 2, '2022-04-16');

-- Bảng "Tài khoản"
INSERT INTO TaiKhoan(TenNguoiDung, TenDangNhap, MatKhau, Email, SDT, LoaiTK, NgayTao) 
VALUES ('Nguyen Van A', 'nguyenvana', '123456', 'nguyenvana@gmail.com', '0123456789', 'Người dùng', '2022-01-01'),
       ('Tran Thi B', 'tranthib', 'abcdef', 'tranthib@gmail.com', '0987654321', 'Người dùng', '2022-01-02'),
       ('Pham Huy Hoang', 'admin', 'admin123', 'admin@gmail.com', '0123456789', 'Quản trị viên', '2022-01-01'),
       ('Pham Van C', 'phamvanc', 'abc123', 'phamvanc@gmail.com', '0987654321', 'Người dùng', '2022-01-03');


-- Thêm dữ liệu vào bảng "Loại Tin Tức"
INSERT INTO LoaiTinTuc (TenLoaiTinTuc, MoTa)
VALUES
('Sản phẩm mới', 'Các sản phẩm mới của Mercedes-Benz'),
('Sự kiện', 'Các sự kiện của Mercedes-Benz'),
('Khuyến mãi', 'Các chương trình khuyến mãi của Mercedes-Benz');

-- Thêm dữ liệu vào bảng "Tin Tức"
INSERT INTO TinTuc (MaLoaiTinTuc, TieuDe, HinhAnh, NoiDung, NgayTao)
VALUES
(1, 'Mercedes-Benz ra mắt mẫu xe mới E-Class 2022', 'e-class-2022.jpg', 'Mercedes-Benz vừa giới thiệu mẫu xe E-Class mới nhất với thiết kế hiện đại, nội thất sang trọng và công nghệ tiên tiến. Mẫu xe E-Class 2022 sở hữu hệ thống điều khiển thông minh MBUX, bảo vệ an toàn tiên tiến và hiệu suất động cơ tăng cường. Được sản xuất tại nhà máy Bremen, Đức, mẫu xe E-Class 2022 sẽ là một trong những mẫu xe sang trọng và tiên tiến nhất của Mercedes-Benz.', '2022-04-10'),
(1, 'Mercedes-Benz ra mắt mẫu xe EQC mới', 'eqc-new.jpg', 'Mercedes-Benz chính thức giới thiệu mẫu xe điện EQC mới với thiết kế đậm chất thể thao và khả năng hoạt động bền bỉ. Mẫu xe EQC được trang bị bộ pin lớn 80 kWh, giúp xe có thể chạy được khoảng cách lên đến 420 km một lần sạc đầy. Điểm nổi bật của mẫu xe EQC là hệ thống giảm ồn và các tính năng an toàn tiên tiến, giúp người lái và hành khách tận hưởng một chuyến đi êm ái và an toàn.', '2022-03-15'),
(2, 'Mercedes-Benz tổ chức sự kiện tri ân khách hàng', 'customer-appreciation.jpg', 'Mercedes-Benz đã tổ chức sự kiện tri ân khách hàng tại các đại lý trên toàn quốc, tặng quà và cung cấp dịch vụ chăm sóc xe miễn phí cho khách hàng.Sự kiện đã thu hút hàng nghìn khách hàng đến tham gia và đánh giá cao về chất lượng dịch vụ của Mercedes-Benz.', '2022-02-28'),
(3, 'Mercedes-Benz giảm giá mẫu xe GLC 2021', 'glc-sale.jpg', 'Mercedes-Benz đang áp dụng chương trình giảm giá cho mẫu xe GLC 2021, giá chỉ từ 1,5 tỷ đồng. Đây là cơ hội tốt cho những khách hàng yêu thích mẫu xe này của Mercedes-Benz để sở hữu một chiếc xe chất lượng cao.', '2022-01-20'),
(2, 'Mercedes-Maybach S-Class sang trọng và công nghệ', 'aaa.jpg', 'Mercedes-Maybach S-Class 2021 là một mẫu xe hạng sang đẳng cấp của Mercedes-Benz, với thiết kế sang trọng và đẳng cấp cùng những tính năng công nghệ tiên tiến như hệ thống đèn pha LED Multibeam hoặc hệ thống treo AIRMATIC. Xe được trang bị động cơ V8 tăng áp kép với công suất 496 mã lực và mô-men xoắn cực đại 516 lb-ft.', '2021-04-16'),
(1, 'Mercedes-Benz EQS - Mẫu concept xe điện tương lai', 'eqs.jpg', 'Mercedes-Benz Vision EQS là một mẫu concept xe điện tương lai của hãng xe danh tiếng Đức, với thiết kế đột phá và hiện đại. Xe được trang bị công nghệ EQS với khả năng vận hành liên tục 700km sau mỗi lần sạc đầy pin, cùng với nhiều tính năng an toàn và tiện nghi tiên tiến.', '2021-04-18');

