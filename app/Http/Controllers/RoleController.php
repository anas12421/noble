<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    function role_view(){
        $permissions = Permission::all();
        $roles = Role::all();
        $users= User::all();
        return view('admin.role.index',[
            'permissions'=>$permissions,
            'roles'=>$roles,
            'users'=>$users,
        ]);
    }

    function permission_store(Request $request){
         Permission::create(['name' => $request->permission_name]);
         return back();
    }

    function role_store(Request $request){
       $role = Role::create(['name' => $request->role_name]);
       $role->givePermissionTo($request->permission);

       return back();
    }

    function role_delete($id){
        Role::find($id)->delete();
        DB::table('role_has_permissions')->where('role_id' , $id)->delete();
        return back();
    }

    function role_edit($id){
        $permissions = Permission::all();
        $role = Role::find($id);
        return view('admin.role.edit',[
            'permissions'=>$permissions,
            'role'=>$role,
        ]);
    }

    function role_update(Request $request, $id){
        $role = Role::find($id);

        $role->syncPermissions([$request->permission]);
        return back();
    }

    function assign_role(Request $request){
        $user = User::find($request->user_id);
        $user->assignRole($request->role);

        return back();
    }

    function remove_role($id){
        // $user = User::find($id);
        DB::table('model_has_roles')->where("model_id" , $id)->delete();
        return back();
    }
}
