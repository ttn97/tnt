<?php

namespace App\Http\Controllers;
//use App\Caycanh;

use Illuminate\Http\Request;
use App\Loaicaycanh;

class TypeProductsController extends Controller
{
    //
    public function getList(){
        $type_product= Loaicaycanh::all();
        return view('admin.loaicay.list',compact('type_product'));
    }

    public function getAdd(){
        //$type_product = Loaicaycanh::where('id',$id)->get();
        return view('admin.loaicay.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,[
            'Tenloaicay'=>'required|unique:Loaicaycanh,Tenloaicay|max:50'
        ],[
            'Tenloaicay.required'=>'Bạn chưa nhập tên Loại cây cảnh',
            'Tenloaicay.max'=>'Tên loại cây có độ dài tối đa 50 kí tự',
            'Tenloaicay.unique'=>'Tên chuyên mục đã tồn tại',
        ]);
        $type_product = new Loaicaycanh;
        $type_product->Tenloaicay = $req->Tenloaicay;
        $type_product->save();
        return redirect('admin/typeproduct/add')->with('notice','Đã thêm thành công');
    }   

    public function getEdit($id){
        $type_product = Loaicaycanh::find($id);
        return redirect('admin/loaicay/edit',compact('type_product'));
    }

    public function postEdit(){
        $this->validate($req,[
            'Tenloaicay'=>'required|unique:Loaicaycanh,Tenloaicay|max:50'
        ],[
            'Tenloaicay.required'=>'Bạn chưa nhập tên Loại cây cảnh',
            'Tenloaicay.max'=>'Tên loại cây có độ dài tối đa 50 kí tự',
            'Tenloaicay.unique'=>'Tên chuyên mục đã tồn tại',
        ]);

        $type_product=ChuyenMuc::find($id);
        $type_product->Tenloaicay = $req->TenLoaicay;
        $type_product->save();
        return redirect('admin/loaicay/list')->with('notice','Đã sửa thành công');
    }

    public function getDelete($id){
        $type_product = Loaicaycanh::find($id);
        $type_product->delete();
        return redirect('admin/typeproduct/list')->with('notice','Đã xóa thành công');

    }

}
