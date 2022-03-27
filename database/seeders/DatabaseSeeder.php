<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Parametric;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Parametric::create(['value' => 'HM01','description' => 'G&D Smart','group' => 'sistema','conector'=>'nombre de la empresa','slug'=>'g-d']);
        User::create([
            'name'  => 'Jorge Rios Gironda',
            'email' => 'www.fer_gha@hotmail.com',
            'username' => 'jrios',
            'password'  => bcrypt('123456'),
            'phone'  => '+59178784841',
            'adress' => 'C. Mariano colodro z. el tejar',
        ]);

        Permission::create(['name' => 'main.show','description' => 'Mostrar inicio de administrador']);
        Permission::create(['name' => 'products.index','description' => 'Listado de productos']);
        Permission::create(['name' => 'products.edit','description' => 'Editar productos']);
        Permission::create(['name' => 'products.show','description' => 'Vista de productos']);
        Permission::create(['name' => 'products.create','description' => 'Crear productos']);
        Permission::create(['name' => 'products.destroy','description' => 'Borrar productos']);
        Permission::create(['name' => 'user.index','description' => 'Listado de usuarios']);
        Permission::create(['name' => 'user.edit','description' => 'Editar usuarios']);
        Permission::create(['name' => 'user.show','description' => 'Vista de usuarios']);
        Permission::create(['name' => 'user.create','description' => 'Crear usuarios']);
        Permission::create(['name' => 'user.destroy','description' => 'Borrar usuarios']);
        Permission::create(['name' => 'parametrics.index','description' => 'Listado de parametros']);
        Permission::create(['name' => 'parametrics.edit','description' => 'Editar parametros']);
        Permission::create(['name' => 'parametrics.show','description' => 'Vista de parametros']);
        Permission::create(['name' => 'parametrics.create','description' => 'Crear parametros']);
        Permission::create(['name' => 'parametrics.destroy','description' => 'Borrar parametros']);
        Permission::create(['name' => 'role.index','description' => 'Listado de roles']);
        Permission::create(['name' => 'role.edit','description' => 'Editar roles']);
        Permission::create(['name' => 'role.show','description' => 'Vista de roles']);
        Permission::create(['name' => 'role.create','description' => 'Crear roles']);
        Permission::create(['name' => 'role.destroy','description' => 'Borrar roles']);
        Permission::create(['name' => 'permission.index','description' => 'Listado de permisos']);
        Permission::create(['name' => 'permission.edit','description' => 'Editar permisos']);
        Permission::create(['name' => 'permission.show','description' => 'Vista de permisos']);
        Permission::create(['name' => 'permission.create','description' => 'Crear permisos']);
        Permission::create(['name' => 'permission.destroy','description' => 'Borrar permisos']);

        Permission::create(['name' => 'querys.index','description' => 'Listado de consultas']);
        Permission::create(['name' => 'querys.edit','description' => 'Editar consultas']);
        Permission::create(['name' => 'querys.show','description' => 'Vista de consultas']);
        Permission::create(['name' => 'querys.create','description' => 'Crear consultas']);
        Permission::create(['name' => 'querys.destroy','description' => 'Borrar consultas']);
        $admin = Role::create(['name' => 'Administrador']);
        $admin->givePermissionTo([
            'main.show',
            'products.index',
            'products.edit',
            'products.show',
            'products.create',
            'products.destroy',
            'user.index',
            'user.edit',
            'user.show',
            'user.create',
            'user.destroy',
            'parametrics.index',
            'parametrics.edit',
            'parametrics.show',
            'parametrics.create',
            'parametrics.destroy',
            'role.index',
            'role.edit',
            'role.show',
            'role.create',
            'role.destroy',
            'permission.index',
            'permission.edit',
            'permission.show',
            'permission.create',
            'permission.destroy',
            'querys.index',
            'querys.edit',
            'querys.show',
            'querys.create',
            'querys.destroy',
        ]);

        $admin = Role::create(['name' => 'Publicador']);

        $admin->givePermissionTo([
            'main.show',
            'products.index',
            'products.edit',
            'products.show',
            'products.create',
            'products.destroy',
            'querys.index',
            'querys.edit',
            'querys.show',
            'querys.create',
            'querys.destroy',
        ]);



        $guest = Role::create(['name' => 'Cliente']);
        $guest->givePermissionTo([
            'products.show',
            'querys.create',
        ]);
        $user = User::find(1); //Administrador
        $user->assignRole('Administrador');
        /**
         * Generacion de Parametros base
         */
        //Transacciones

    }
}
