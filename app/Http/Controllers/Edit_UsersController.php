<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use App\Models\Users;

class Edit_UsersController extends Controller
{
    function getEdit_user($idUser) {
        // dd($idUser);
        $data['user'] = Users::find($idUser); // tìm bản ghi theo trường id
        return view('edit_user',$data);
    }
    function postEdit_user(EditUserRequest $r, $idUser){
        // dd($r->all());
        $user = Users::find($idUser);
        $user->full = $r->full;
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user->save();
        return redirect('/users');
    }
}
