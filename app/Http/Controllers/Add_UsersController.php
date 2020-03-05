<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Models\Users;

class Add_UsersController extends Controller
{
    function getAdd_user() {
        return view('add_user');
    }
    function postAdd_user(AddUserRequest $r){
        // dd($r->all());
        // khởi tạo đối tượng(bản ghi) mới để thêm dữ liệu vào DB
        $user = new Users;
        $user->full = $r->full;
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user->save();
        return redirect('/users');
    }
}
