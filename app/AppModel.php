<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\User;
use App\Role;
use App\Permission;

class AppModel extends Model
{
    public static function setupLoggedinUserCompany() {
        $user = Auth::user();
        $userFound = User::find($user->id);
        if(!empty($userFound->type == "branch")){
            return Company::find($userFound->branch_users->company_id);    
        }
        if(!empty($userFound->type == "company")){
            return Company::find($userFound->company_users->company_id);    
        }
        return [];
    }

    public static function setupLoggedinUserPermissions () {
        $user = Auth::user();
        $userFound = User::find($user->id);
        if (!empty($userFound->user_roles)) {
            $role = Role::find($userFound->user_roles->role_id); // role and role permissions found...
            $permisions_ids = [];
            foreach($role->role_permissions as $key=>$role_permission) {
                array_push($permisions_ids, $role_permission->permission_id);
            }
            $permissions = Permission::whereIn('id',$permisions_ids)->get();
            return [
                'user_roles' => $role,
                'user_permissions' => $permissions
            ];  
        }
        return [];
    }
}
