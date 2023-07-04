<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\Admin\RoleFormRequest;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index');
    }
    public function add()
    {
        return view('admin.role.add');
    }
    public function add_role(RoleFormRequest $request)
    {
        $data = $request->validated();
        $role = new Role();
        $role->name =  $data['name'];
        $role->role_id =  $data['role_id'];
        $role->email =  $data['email'];
        $role->phone =  '0';
        $role->assign_project =  '0';
        $role->password =  Hash::make($data['role_id']);
        $role->status =  1;
        $role->save();
        return redirect('/admin/roles')->with('status','Your details is submitted successfully.');
    }
}
