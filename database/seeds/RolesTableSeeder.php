<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['nom' => 'Super-admin']);
        Role::create(['nom' => 'Admin']);
        Role::create(['nom' => 'Agent']);
        Role::create(['nom' => 'Etudiant']);
        Role::create(['nom' => 'Enseignant']);
        Role::create(['nom' => 'Parent']);
    }
}
