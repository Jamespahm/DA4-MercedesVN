<?php

namespace App\Http\Controllers;

use App\Models\Xe;
use App\Models\KhachHang;
use App\Models\DonBan;
use App\Models\CTDonBan;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productlist()
    {
        $products = Xe::all();

        return view('products', ['products' => $products]);
    }

    public function checkout(Request $request)
    {
        
        $xe = Xe::where('Xe.MaXe', $request->txtma)->firstOrFail();

        $kh = new KhachHang;
        $kh->TenKhachHang = $request->txtname;
        $kh->DiaChi = $request->txtaddress;
        $kh->SoDienThoai = $request->txtphone;
        $kh->Email = $request->txtemail;
        $kh->NgayDangKy = date('Y-m-d H:i:s');
        $kh->save();

        $db = new DonBan;
        $db->MaKhachHang = $kh->id;
        $db->NgayBan = $kh->NgayDangKy;
        $db->TrangThai = 'Dang xu ly';
        $db->TongTien = $xe->GiaTien;
        $db->save();

        $ctdb = new CTDonBan;
        $ctdb->MaDonBan = $db->id;
        $ctdb->MaXe = $xe->MaXe;
        $ctdb->SoLuong = 1;
        $ctdb->GiaBan = $xe->GiaTien;
        $ctdb->save();

        return redirect()->route('productlist');
    }
}
