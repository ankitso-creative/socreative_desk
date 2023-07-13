<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\Admin\RoleFormRequest;
use App\Http\Requests\Admin\RoleEditFormRequest;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all()->where('id', '!=', 1);
       /*  echo "<pre>";
        print_r($roles);
        die(); */
        return view('admin.role.index', compact('roles'));
    }
    public function add()
    {
        return view('admin.role.add');
    }
    public function edit($id)
    {
        $result =  Role::find($id);
        return view('admin.role.edit', compact('result'));
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
    public function update(RoleEditFormRequest $request, $id)
    {
        $data = $request->validated();
        $role = Role::find($id);
        $role->name =  $data['name'];
        $role->role_id =  $data['role_id'];
        $role->email =  $data['email'];
        $role->phone =  $role->phone;
        $role->assign_project =  $role->assign_project;
        $role->update();
        return redirect('/admin/roles')->with('status','Your details is update successfully.');
    }
    function detele($id)
    {
        $role = Role::find($id);
        if($role):
            $role->delete();
            return redirect('/admin/roles')->with('status','Your details is deleted successfully.');
        else:
            return redirect('/admin/roles')->with('status','Please try again.');
        endif;
    }
}
