<?php

namespace App\Http\Controllers;

use App\Models\ChiTietXe;
use App\Models\TaiKhoan;
use App\Models\LoaiXe;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use App\Models\Xe;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
    public function index()
    {
        $loaixe = LoaiXe::all();
        $xe = Xe::all();
        return view('index', ['LoaiXe' => $loaixe, 'Xe' => $xe]);
    }

    public function showProducts($Id)
    {
        $xe = Xe::where('id', $Id)->get();
        return response()->json($xe);
    }

    public function productlist()
    {
        $loaixe = LoaiXe::all();
        $xe = Xe::all();
        return view('productlist', ['LoaiXe' => $loaixe, 'Xe' => $xe]);
    }

    public function productDetail($MaXe)
    {
        $chitietxe = ChiTietXe::where('ChiTietXe.MaXe', $MaXe)
            ->join('Xe', 'ChiTietXe.MaXe', '=', 'Xe.MaXe')
            ->firstOrFail();

        return view('product-detail', compact('chitietxe'));
    }



    public function __construct()
    {
        $this->middleware('web');
    }
  



  
  



    public function news()
    {
        
        $tt = TinTuc::all();
        return view('news', ['TinTuc' => $tt]);
    }
    /**
     * Summary of login
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('login');
    }

    public function login1(Request $request)
    {
        $taikhoan = TaiKhoan::where('TenDangNhap', $request->tk)
        ->where('MatKhau', $request->password)
        ->first();

        if($taikhoan != null) {
            return view('Admin.darshboard');
        } else {
            return back()->with('message', 'Tài khoản hoặc mật khẩu sai !');
        }

        
    }

    public function register()
    {
        return view('register');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogSingle()
    {
        return view('blogSingle');
    }
    public function contactUs()
    {
        return view('contactUs');
    }

    public function nf404()
    {
        return view('nf404');
    }
}
