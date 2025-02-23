<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear permisos
        Permission::create(['name' => 'ver-dashboard']);
        Permission::create(['name' => 'editar-usuarios']);
        Permission::create(['name' => 'eliminar-usuarios']);
        Permission::create(['name' => 'ver-soporte']);
        Permission::create(['name' => 'ver-general']);

        // Crear roles
        $admin = Role::create(['name' => 'Administrador']);
        $soporte = Role::create(['name' => 'Soporte']);
        $general = Role::create(['name' => 'General']);

        // Asignar permisos a roles
        $admin->givePermissionTo([
            'ver-dashboard',
            'editar-usuarios',
            'eliminar-usuarios',
            'ver-soporte',
            'ver-general',
        ]);

        $soporte->givePermissionTo([
            'ver-dashboard',
            'ver-soporte',
            'ver-general',
        ]);

        $general->givePermissionTo([
            'ver-dashboard',
            'ver-general',
        ]);
    }
}
   
