<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'create-ikibina']);
        Permission::create(['name' => 'edit-ikibina']);
        Permission::create(['name' => 'delete-ikibina']);

        Permission::create(['name' => 'create-members']);
        Permission::create(['name' => 'edit-members']);
        Permission::create(['name' => 'delete-member']);

        Permission::create(['name' => 'create-activity']);
        Permission::create(['name' => 'edit-activity']);
        Permission::create(['name' => 'delete-activity']);
        Permission::create(['name' => 'activate-posted-activity']);
        Permission::create(['name' => 'disactivate-posted-activity']);


        Permission::create(['name' => 'pay-umusanzu']);
        Permission::create(['name' => 'edit-umusanzu']);
        Permission::create(['name' => 'delete-umusanzu']);


        Permission::create(['name' => 'pay-inguzanyo']);
        Permission::create(['name' => 'edit-inguzanyo']);
        Permission::create(['name' => 'delete-inguzanyo']);

        Permission::create(['name' => 'pay-ibihano']);
        Permission::create(['name' => 'edit-ibihano']);
        Permission::create(['name' => 'delete-ibihano']);





        $SystemAdminRole = Role::create(['name' => 'SystemAdmin']);
        $IkibinaAdminRole = Role::create(['name' => 'IkibinaAdmin']);
        $MemberRole = Role::create(['name' => 'Member']);

        $MemberRole->givePermissionTo([
            'pay-umusanzu',
            'edit-umusanzu',
            'delete-umusanzu',
            'pay-inguzanyo',
            'edit-inguzanyo',
            'delete-inguzanyo',
            'pay-ibihano',
            'edit-ibihano',
            'delete-ibihano',
        ]);


        $IkibinaAdminRole->givePermissionTo([
            'create-members',
            'edit-ikibina',
            'delete-member',
            'delete-activity',
            'activate-posted-activity',
            'disactivate-posted-activity',
            'pay-umusanzu',
            'edit-umusanzu',
            'delete-umusanzu',
            'pay-inguzanyo',
            'edit-inguzanyo',
            'delete-inguzanyo',
            'pay-ibihano',
            'edit-ibihano',
            'delete-ibihano',
        ]);



        $SystemAdminRole->givePermissionTo([
            'delete-ikibina',
            'create-members',
            'edit-members',
            'delete-member',
            'delete-activity',
            'delete-umusanzu',
            'delete-inguzanyo',
            'delete-ibihano',
        ]);
    }
}
