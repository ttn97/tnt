<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CayCanh;
class ProductsController extends Controller
{
    //
    public function getList(){
        $product= CayCanh::all();
        return view('admin.cay.list',compact('product'));
    }

    public function getAdd(){
        //$type_product = Loaicaycanh::where('id',$id)->get();
        return view('admin.cay.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,[
            'tencay'=>'required|unique:CayCanh,tencay|max:50'
            
        ],[
            'tencay.required'=>'Bạn chưa nhập tên cây cảnh',
            'tencay.max'=>'Tên cây có độ dài tối đa 32 kí tự',
            'tencay.unique'=>'Tên chuyên mục đã tồn tại',
        ]);
        $product = new CayCanh;
        $product->TenCay = $req->tencay;
        $product->NoiDung = $req->noidung;
        $product->gia1 = $req->giagoc;
        $product->gia2 = $req->giakm;
        $product->save();
        return redirect('admin/product/add')->with('notice','Đã thêm thành công Cây Cảnh');
    }   

    public function getEdit($id){
        $type_product = Loaicaycanh::find($id);
        return redirect('admin/loaicay/edit',compact('type_product'));
    }

    public function postEdit($id, $req){
        $this-> validate($req,
        [
            'Ten'=>'required|unique:ChuyenMuc,Ten|min:6|max:100'
        ],
        [
            'Ten.required'=>'Bạn nhập chuyên mục',
            'Ten.min'=>'Tên phải có độ dài hơn 6 kí tự',
            'Ten.max'=>'Tên phải có độ dài nhỏ hơn 100 kí tự',
            'Ten.unique'=>'Tên chuyên mục đã tồn tại',
        ]);
        $chuyenmuc=ChuyenMuc::find($id);
        $chuyenmuc->Ten = $request->Ten;
        $chuyenmuc->TenKhongDau = ChangeTitle($request->Ten);
        $chuyenmuc->save();
        return redirect('admin/chuyenmuc/danhsach')->with('notice','sửa thành công');
    }

    public function getDelete(){

    }
}
