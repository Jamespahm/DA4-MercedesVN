CREATE DATABASE MERCEDESDB
GO
USE MERCEDESDB
GO

CREATE TABLE LoaiXe (
  MaLoaiXe INT PRIMARY KEY,
  TenLoaiXe VARCHAR(255) NOT NULL
);

CREATE TABLE Xe (
  MaXe INT PRIMARY KEY,
  TenXe VARCHAR(255) NOT NULL,
  NamSanXuat INT NOT NULL,
  GiaBan FLOAT NOT NULL,
  HinhAnh VARCHAR(255) NOT NULL,
  MoTa TEXT NOT NULL,
  MaLoaiXe INT NOT NULL,
  FOREIGN KEY (MaLoaiXe) REFERENCES LoaiXe(MaLoaiXe)
);

CREATE TABLE KhachHang (
  MaKhachHang INT PRIMARY KEY,
  TenKhachHang VARCHAR(255) NOT NULL,
  DiaChi VARCHAR(255) NOT NULL,
  Email VARCHAR(255) NOT NULL,
  SoDienThoai VARCHAR(20) NOT NULL,
  MatKhau VARCHAR(255) NOT NULL
);

CREATE TABLE DanhSachXeDaLuu (
  MaXe INT PRIMARY KEY,
  TenXe VARCHAR(255) NOT NULL,
  GiaBan FLOAT NOT NULL
);

CREATE TABLE DonDatHangMuaXe (
  MaDonHang INT PRIMARY KEY,
  MaKhachHang INT NOT NULL,
  MaXe INT NOT NULL,
  NgayDatHang DATE NOT NULL,
  SoLuongXe INT NOT NULL,
  TongGiaTien FLOAT NOT NULL,
  FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
  FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);

CREATE TABLE DonKhachDangKiLaiThu (
  MaDonDangKi INT PRIMARY KEY,
  MaKhachHang INT NOT NULL,
  MaXe INT NOT NULL,
  NgayDangKi DATE NOT NULL,
  NgayLaiThu DATE NOT NULL,
  DiaDiemLaiThu VARCHAR(255) NOT NULL,
  FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
  FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);



CREATE TABLE TaiKhoanAdmin (
  MaTaiKhoan INT PRIMARY KEY,
  TenTaiKhoan VARCHAR(255) NOT NULL,
  MatKhau VARCHAR(255) NOT NULL
);

CREATE TABLE TinTuc (
  MaTinTuc INT PRIMARY KEY,
  TieuDe VARCHAR(255) NOT NULL,
  NoiDung TEXT NOT NULL,
  NgayDang DATE NOT NULL,
  HinhAnh VARCHAR(255) NOT NULL
);

--THÊM DỮ LIỆU VÀO CÁC BẢNG--
GO
--Bảng LoaiXe--
INSERT INTO LoaiXe (MaLoaiXe, TenLoaiXe)
VALUES (1, 'Sedan');

INSERT INTO LoaiXe (MaLoaiXe, TenLoaiXe)
VALUES (2, 'SUV');


--Bảng Xe--
INSERT INTO Xe (MaXe, TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES (1, 'Mercedes-Benz C-Class', 2022, 2000000000, 'mercedes-c-class.jpg', 'Mercedes-Benz C-Class là một mẫu sedan hạng sang của hãng Mercedes-Benz', 1);

INSERT INTO Xe (MaXe, TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES (2, 'Mercedes-Benz E-Class', 2023, 2500000000, 'mercedes-e-class.jpg', 'Mercedes-Benz E-Class là một mẫu sedan hạng sang của hãng Mercedes-Benz', 1);

INSERT INTO Xe (MaXe, TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES (3, 'Mercedes-Benz S-Class', 2022, 4500000000, 'mercedes-s-class.jpg', 'Mercedes-Benz S-Class là một mẫu sedan siêu hạng của hãng Mercedes-Benz', 1);

INSERT INTO Xe (MaXe, TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES (4, 'Mercedes-Benz GLC', 2022, 2200000000, 'mercedes-glc.jpg', 'Mercedes-Benz GLC là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe (MaXe, TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES (5, 'Mercedes-Benz GLE', 2023, 2900000000, 'mercedes-gle.jpg', 'Mercedes-Benz GLE là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);


--Bảng KhachHang--
INSERT INTO KhachHang (MaKhachHang, TenKhachHang, DiaChi, Email, SoDienThoai, MatKhau)
VALUES (1, 'Nguyan Van A', 'Ha Noi', 'nguyenvana@gmail.com', '0987654321', 'matkhau1');

INSERT INTO KhachHang (MaKhachHang, TenKhachHang, DiaChi, Email, SoDienThoai, MatKhau)
VALUES (2, 'Pham Thi B', 'TP. Ho Chi Minh', 'phamthib@gmail.com', '0123456789', 'matkhau2');


--Bảng DanhSachXeDaLuu--
INSERT INTO DanhSachXeDaLuu (MaXe, TenXe,GiaBan)
VALUES (1, 'Mercedes-Benz C-Class', '2000000000');

INSERT INTO DanhSachXeDaLuu (MaXe, TenXe,GiaBan)
VALUES (2, 'Mercedes-Benz E-Class', '2500000000');

INSERT INTO DanhSachXeDaLuu (MaXe, TenXe,GiaBan)
VALUES (3, 'Mercedes-Benz S-Class', '4500000000');


--Bảng DonDatHangMuaXe--
INSERT INTO dondathangmuaxe (MaDonHang, MaKhachHang, MaXe, NgayDatHang, SoLuongXe, TongGiaTien)
VALUES (1, 1, 1, '2022-03-20', 1, 2000000000);

INSERT INTO dondathangmuaxe (MaDonHang, MaKhachHang, MaXe, NgayDatHang, SoLuongXe, TongGiaTien)
VALUES (2, 2, 2, '2022-03-22', 2, 2500000000);


--Bảng DonKhachDangKiLaiThu--
INSERT INTO DonKhachDangKiLaiThu (MaDonDangKi, MaKhachHang, MaXe, NgayDangKi, NgayLaiThu, DiaDiemLaiThu)
VALUES (1, 2, 1, '2022-03-25', '2022-04-01', 'Ha Noi');

INSERT INTO DonKhachDangKiLaiThu (MaDonDangKi, MaKhachHang, MaXe, NgayDangKi, NgayLaiThu,DiaDiemLaiThu)
VALUES (2, 1, 3, '2022-03-27', '2022-04-02', 'Hai Phong');


--Bảng TinTuc--
INSERT INTO TinTuc (MaTinTuc, TieuDe, NoiDung, NgayDang, HinhAnh)
VALUES (1, 'Mercedes-Benz giới thiệu mẫu xe SUV mới', 'Mercedes-Benz vừa giới thiệu mẫu xe SUV mới có tên là GLC, được trang bị động cơ mạnh mẽ và nhiều tính năng an toàn.', '2022-03-10', 'glc.jpg');

INSERT INTO TinTuc (MaTinTuc, TieuDe, NoiDung, NgayDang, HinhAnh)
VALUES (2, 'Mercedes-Benz ra mắt phiên bản đặc biệt của dòng S-Class', 'Hãng xe hơi Đức Mercedes-Benz vừa cho ra mắt phiên bản đặc biệt của dòng S-Class, với nhiều tính năng tiên tiến và thiết kế đẳng cấp.', '2022-02-20', 's-class.jpg');

INSERT INTO TinTuc (MaTinTuc, TieuDe, NoiDung, NgayDang, HinhAnh)
VALUES (3, 'Mercedes-Benz tung ra chương trình khuyến mãi đặc biệt', 'Trong tháng này, Mercedes-Benz tung ra chương trình khuyến mãi đặc biệt cho các mẫu xe của hãng, mang đến cho khách hàng nhiều ưu đãi hấp dẫn.', '2022-03-01', 'khuyen-mai.jpg');

--Bảng ADMIN--
INSERT INTO TaiKhoanAdmin (MaTaiKhoan, TenTaiKhoan, MatKhau)
VALUES (1, 'admin1', 'password1');

INSERT INTO TaiKhoanAdmin (MaTaiKhoan, TenTaiKhoan, MatKhau)
VALUES (2, 'admin2', 'password2');