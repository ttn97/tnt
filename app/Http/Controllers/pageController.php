<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caycanh;
use App\Loaicaycanh;
use Illuminate\Support\Facades\Auth;
class pageController extends Controller
{
    //

    public function getIndex(){
        $new_caycanh = Caycanh::where('new',1)->paginate(8);
        $top_caycanh = Caycanh::where('TopSP',1)->paginate(8);
        $loai = Loaicaycanh::all();
        return view('page/trangchu',compact('new_caycanh','top_caycanh','loai'));
    }

    public function getLoaisp($id){
        $sp_loai = Caycanh::where('idTenloaicay',$id)->get();
        $sp_khac = Caycanh::where('idTenloaicay','<>',$id)->paginate(4);
        $loai = Loaicaycanh::all();
        $loai_sp = Loaicaycanh::where('id',$id)->first();
        return view('page/LoaiSP',compact('sp_loai','sp_khac','loai','loai_sp'));
    }

    public function getChiTietSp(Request $req){
        $sanpham = Caycanh::where('id',$req->id)->first();
        $sp_tuongtu = Caycanh::where('idTenloaicay',$sanpham->idTenloaicay)->get();
        $new_caycanh = Caycanh::where('new',1)->paginate(4);
        return view('page/chitietsp',compact('sanpham','sp_tuongtu','new_caycanh'));
    }

    public function getContact(){
        return view('page/contact');
    }

    public function getAbout(){
        return view('page/gioithieu');
    }

    public function getSearch(Request $req){
        $product=Caycanh::where('TenCay','like','%'.$req->key.'%')->get();
        $loai = Loaicaycanh::all();
        return view('page/search',compact('product','loai'));
    }

    public function getAdmin(){
        return view('page/loginAdmin');
    }

    public function postAdmin(Request $req){
        $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:32',
        ],[
            'email.required'=>'vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'vui lòng nhập password',
            'password.min'=>'mật khẩu ít nhất 6 kí tự',
            'password.max'=>'mật khẩu có tối đa  32 kí tự',
        ]);

        if(Auth::attempt(['email'=>$req->email,'password'=>$req->password])){
            return redirect('admin');
        }
        else{
            return redirect('admin')->with('notice','Đăng nhập thất bại');
        }
    }

}
