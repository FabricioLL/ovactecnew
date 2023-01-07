<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Repartidor']);

        Permission::create([
            'name'=> 'categories.index',
            'description' => 'Ver las categorias'
        ])->syncRoles([$role1,$role2]);
        Permission::create ([
            'name'=> 'categories.create',
            'description' => 'Crear categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'categories.edit',
            'description' => 'Editar categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'categories.destroy',
            'description' => 'Eliminar categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'categories.show',
            'description' => 'Ver detalles de categorias'
        ])->syncRoles([$role1]);


        Permission::create([
            'name'=> 'providers.index',
            'description' => 'Ver los proveedores'
        ])->syncRoles([$role1,$role2]);
        Permission::create ([
            'name'=> 'providers.create',
            'description' => 'Crear proveedores'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'providers.edit',
            'description' => 'Editar proveedor'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'providers.destroy',
            'description' => 'Eliminar proveedor'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'providers.show',
            'description' => 'Ver detalles de proveedores'
        ])->syncRoles([$role1]);


        Permission::create([
            'name'=> 'roles.index',
            'description' => 'Ver los roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'roles.create',
            'description' => 'Crear roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'roles.edit',
            'description' => 'Editar roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'roles.destroy',
            'description' => 'Eliminar roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'roles.show',
            'description' => 'Ver detalles de roles'
        ])->syncRoles([$role1]);



        Permission::create([
            'name'=> 'users.index',
            'description' => 'Ver usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'users.create',
            'description' => 'Crear usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'users.edit',
            'description' => 'Editar usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'users.destroy',
            'description' => 'Eliminar usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'users.show',
            'description' => 'Ver detalles de usuarios'
        ])->syncRoles([$role1]);


        Permission::create([
            'name'=> 'products.index',
            'description' => 'Ver productos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'products.create',
            'description' => 'Crear productos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'products.edit',
            'description' => 'Editar productos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'products.destroy',
            'description' => 'Eliminar productos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'products.show',
            'description' => 'Ver detalles de productos'
        ])->syncRoles([$role1]);


        Permission::create([
            'name'=> 'clients.index',
            'description' => 'Ver clientes'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'clients.create',
            'description' => 'Crear clientes'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'clients.edit',
            'description' => 'Editar clientes'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'clients.destroy',
            'description' => 'Eliminar clientes'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'clients.show',
            'description' => 'Ver detalles de clientes'
        ])->syncRoles([$role1]);


        Permission::create([
            'name'=> 'purchases.index',
            'description' => 'Ver compras'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'purchases.create',
            'description' => 'Crear compras'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'purchases.pdf',
            'description' => 'Ver pdf compras'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'purchases.show',
            'description' => 'Ver detalles de compras'
        ])->syncRoles([$role1]);



        Permission::create([
            'name'=> 'sales.index',
            'description' => 'Ver ventas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'sales.create',
            'description' => 'Crear ventas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'sales.pdf',
            'description' => 'Ver pdf ventas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'sales.print',
            'description' => 'Imprimir ventas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name'=> 'sales.show',
            'description' => 'Ver detalles de ventas'
        ])->syncRoles([$role1]);


        Permission::create([
            'name'=> 'reports.day',
            'description' => 'Ver reportes de ventas por dia'
        ])->syncRoles([$role1]);

        Permission::create([
            'name'=> 'reports.date',
            'description' => 'Ver reportes de ventas por fecha'
        ])->syncRoles([$role1]);

        Permission::create([
            'name'=> 'rday.day',
            'description' => 'Ver reportes de compras por dia'
        ])->syncRoles([$role1]);

        Permission::create([
            'name'=> 'rdate.date',
            'description' => 'Ver reportes de compras por fecha'
        ])->syncRoles([$role1]);
    }
}
