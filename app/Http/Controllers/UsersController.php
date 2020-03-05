<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function getUser(Request $r){
        //dd($r->all());
        if ($r->search!='') { // ô search ko rỗng thì thực hiện code
            $data['users'] = Users::where('full','like','%'.$r->search.'%')
            ->orwhere('phone','like','%'.$r->search.'%')
            ->orderBy('id','desc')->paginate(10);
            return view('user',$data);
        }else{
            //$data['users'] = Users::all(); //lấy ra tất cả bản ghi, $data để truyền, users từ key sang view thành biến, users::all là tên class model
            $data['users'] = Users::orderBy('id','desc')->paginate(10);//lấy tất cả bản ghi(theo điều kiện) và phân trang
            // dd($data['users']->toarray());
            return view('user',$data);
        }

    }
    public function delUser($idUser){
        Users::find($idUser)->delete(); // tìm bản ghi và xóa
        return redirect('/users');
    }
}
