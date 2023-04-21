<?php
namespace Database\Seeders;
use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;


class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
<<<<<<< HEAD
        Role::findOrFail(2)->permissions()->sync(2);
=======
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
    }
}
