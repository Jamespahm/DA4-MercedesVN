﻿CREATE DATABASE MERCEDES
GO
USE MERCEDES
GO

CREATE TABLE LoaiXe (
  MaLoaiXe INT IDENTITY(1,1) PRIMARY KEY,
  TenLoaiXe VARCHAR(255) NOT NULL
);

CREATE TABLE Xe (
  MaXe INT IDENTITY(1,1) PRIMARY KEY,
  TenXe VARCHAR(255) NOT NULL,
  NamSanXuat INT NOT NULL,
  GiaBan FLOAT NOT NULL,
  HinhAnh VARCHAR(255) NOT NULL,
  MoTa TEXT NOT NULL,
  MaLoaiXe INT NOT NULL,
  FOREIGN KEY (MaLoaiXe) REFERENCES LoaiXe(MaLoaiXe)
);

CREATE TABLE KhachHang (
  MaKhachHang INT IDENTITY(1,1) PRIMARY KEY,
  TenKhachHang VARCHAR(255) NOT NULL,
  DiaChi VARCHAR(255) NOT NULL,
  Email VARCHAR(255) NOT NULL,
  SoDienThoai VARCHAR(20) NOT NULL,
  MatKhau VARCHAR(255) NOT NULL
);

CREATE TABLE DanhSachXeDaLuu (
  MaXeDaLuu INT IDENTITY(1,1) PRIMARY KEY,
  MaKhachHang INT NOT NULL,
  MaXe INT NOT NULL,
  TenXe VARCHAR(255) NOT NULL,
  GiaBan FLOAT NOT NULL
  FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
  FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);

CREATE TABLE DonDatHangMuaXe (
  MaDonHang INT IDENTITY(1,1) PRIMARY KEY,
  MaKhachHang INT NOT NULL,
  MaXe INT NOT NULL,
  NgayDatHang DATE NOT NULL,
  SoLuongXe INT NOT NULL,
  TongGiaTien FLOAT NOT NULL,
  FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
  FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);

CREATE TABLE DonKhachDangKiLaiThu (
  MaDonDangKi INT IDENTITY(1,1) PRIMARY KEY,
  MaKhachHang INT NOT NULL,
  MaXe INT NOT NULL,
  NgayDangKi DATE NOT NULL,
  NgayLaiThu DATE NOT NULL,
  DiaDiemLaiThu VARCHAR(255) NOT NULL,
  FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
  FOREIGN KEY (MaXe) REFERENCES Xe(MaXe)
);



CREATE TABLE TaiKhoanAdmin (
  MaTaiKhoan INT IDENTITY(1,1) PRIMARY KEY,
  TenAdmin VARCHAR(255) NOT NULL,
  Email VARCHAR(255) NOT NULL,
  SoDienThoai VARCHAR(20) NOT NULL,
  MatKhau VARCHAR(255) NOT NULL,
);

CREATE TABLE TinTuc (
  MaTinTuc INT IDENTITY(1,1) PRIMARY KEY,
  TieuDe VARCHAR(255) NOT NULL,
  NoiDung TEXT NOT NULL,
  NgayDang DATE NOT NULL,
  HinhAnh VARCHAR(255) NOT NULL
);

--THÊM DỮ LIỆU VÀO CÁC BẢNG--
-- Bảng LoaiXe--
INSERT INTO LoaiXe (TenLoaiXe)
VALUES ('Sedan');

INSERT INTO LoaiXe (TenLoaiXe)
VALUES ('SUV');

INSERT INTO LoaiXe (TenLoaiXe)
VALUES ('Coupé');


-- Bảng Xe--
INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('EQS', 2022, 4888000000, 'EQS/eqs1.webp', 'Mercedes-Benz EQS là một mẫu điện hạng sang của hãng Mercedes-Benz', 1);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('A-Class', 2019, 1888000000, 'A-Class/aclass1.webp', 'Mercedes-Benz A-Class là một mẫu sedan hạng sang của hãng Mercedes-Benz', 1);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('C-Class', 2023, 2888000000, 'C-Class/c-class1.webp', 'Mercedes-Benz C-Class là một mẫu sedan hạng sang của hãng Mercedes-Benz', 1);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('E-Class', 2023, 2500000000, 'E-Class/e-class1.webp', 'Mercedes-Benz E-Class là một mẫu sedan hạng sang của hãng Mercedes-Benz', 1);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('S-Class', 2022, 5500000000, 'S-Class/s-class1.webp', 'Mercedes-Benz S-Class là một mẫu sedan siêu hạng của hãng Mercedes-Benz', 1);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('Mayback S-Class', 2022, 8888000000, 'S-Class-Mayback/s-classmb1.webp', 'Mercedes-Benz Mayback S-Class là một mẫu sedan siêu hạng của hãng Mercedes-Benz', 1);


INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLA SUV', 2022, 3488000000, 'GLA/gla1.webp', 'Mercedes-Benz GLA là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLB SUV', 2022, 2288000000, 'GLB/glb1.webp', 'Mercedes-Benz GLB là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLC SUV', 2022, 28880000000, 'GLC/glc1.webp', 'Mercedes-Benz GLC là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLE SUV', 2023, 4888000000, 'GLE/gle1.webp', 'Mercedes-Benz GLE là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLS ', 2022, 5588000000, 'GLS/gls1.webp', 'Mercedes-Benz GLS là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('G-Class', 2022, 118880000000, 'G-Class/g-class1.webp', 'Mercedes-Benz G-Class là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('Mayback GLS', 2023, 8888000000, 'GLS-Mayback/glsmb1.webp', 'Mercedes-Benz GLE là một mẫu SUV hạng sang của hãng Mercedes-Benz', 2);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLC Coupé', 2022, 1888000000, 'GLC-Coupe/glcc1.webp', 'Mercedes-Benz GLC Coupé là một mẫu SUV Coupe của hãng Mercedes-Benz', 3);

INSERT INTO Xe ( TenXe, NamSanXuat, GiaBan, HinhAnh, MoTa, MaLoaiXe)
VALUES ('GLE Coupé', 2023, 2888000000, 'GLE-Coupe/glec1.webp', 'Mercedes-Benz GLE Coupé là một mẫu SUV Coupe của hãng Mercedes-Benz', 3);


-- Bảng KhachHang--
INSERT INTO KhachHang ( TenKhachHang, DiaChi, Email, SoDienThoai, MatKhau)
VALUES ( 'Nguyan Van A', 'Ha Noi', 'nguyenvana@gmail.com', '0987654321', 'matkhau1');

INSERT INTO KhachHang ( TenKhachHang, DiaChi, Email, SoDienThoai, MatKhau)
VALUES ( 'Pham Thi B', 'TP. Ho Chi Minh', 'phamthib@gmail.com', '0123456789', 'matkhau2');

INSERT INTO KhachHang ( TenKhachHang, DiaChi, Email, SoDienThoai, MatKhau)
VALUES ( 'Le Van C', 'Hai Phong', 'levanc@gmail.com', '0124556789', 'matkhau');

-- Bảng DanhSachXeDaLuu--
INSERT INTO DanhSachXeDaLuu (MaKhachHang, MaXe,TenXe,GiaBan)
VALUES (1, 1, 'C-Class', '2000000000');

INSERT INTO DanhSachXeDaLuu (MaKhachHang, MaXe,TenXe,GiaBan)
VALUES (2, 2,'E-Class', '2500000000');

INSERT INTO DanhSachXeDaLuu (MaKhachHang, MaXe,TenXe,GiaBan)
VALUES (3, 3, 'S-Class', '4500000000');


-- Bảng DonDatHangMuaXe--
INSERT INTO dondathangmuaxe ( MaKhachHang, MaXe, NgayDatHang, SoLuongXe, TongGiaTien)
VALUES (1, 1, '2022-03-20', 1, 2000000000);

INSERT INTO dondathangmuaxe ( MaKhachHang, MaXe, NgayDatHang, SoLuongXe, TongGiaTien)
VALUES (2, 2, '2022-03-22', 2, 2500000000);


-- Bảng DonKhachDangKiLaiThu--
INSERT INTO DonKhachDangKiLaiThu ( MaKhachHang, MaXe, NgayDangKi, NgayLaiThu, DiaDiemLaiThu)
VALUES ( 2, 1, '2022-03-25', '2022-04-01', 'Ha Noi');

INSERT INTO DonKhachDangKiLaiThu ( MaKhachHang, MaXe, NgayDangKi, NgayLaiThu,DiaDiemLaiThu)
VALUES ( 1, 3, '2022-03-27', '2022-04-02', 'Hai Phong');


-- Bảng TinTuc--
INSERT INTO TinTuc (TieuDe, NoiDung, NgayDang, HinhAnh)
VALUES ( 'Mercedes-Benz giới thiệu mẫu xe SUV mới', 'Mercedes-Benz vừa giới thiệu mẫu xe SUV mới có tên là GLC, được trang bị động cơ mạnh mẽ và nhiều tính năng an toàn.', '2022-03-10', 'glc.jpg');

INSERT INTO TinTuc ( TieuDe, NoiDung, NgayDang, HinhAnh)
VALUES ('Mercedes-Benz ra mắt phiên bản đặc biệt của dòng S-Class', 'Hãng xe hơi Đức Mercedes-Benz vừa cho ra mắt phiên bản đặc biệt của dòng S-Class, với nhiều tính năng tiên tiến và thiết kế đẳng cấp.', '2022-02-20', 's-class.jpg');

INSERT INTO TinTuc ( TieuDe, NoiDung, NgayDang, HinhAnh)
VALUES ('Mercedes-Benz tung ra chương trình khuyến mãi đặc biệt', 'Trong tháng này, Mercedes-Benz tung ra chương trình khuyến mãi đặc biệt cho các mẫu xe của hãng, mang đến cho khách hàng nhiều ưu đãi hấp dẫn.', '2022-03-01', 'khuyen-mai.jpg');

-- Bảng ADMIN--
INSERT INTO TaiKhoanAdmin ( TenAdmin, Email, SoDienThoai, MatKhau)
VALUES ('Nguyễn Văn Sơn','nguyenvanson@gmail.com', '0923456789', 'password');

INSERT INTO TaiKhoanAdmin ( TenAdmin, Email, SoDienThoai, MatKhau)
VALUES ('Phạm Huy Hoàng','phamhuyhoang@gmail.com', '0934567899', 'password');