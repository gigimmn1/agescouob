<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        DB::table('users')->truncate();

        $user1 = User::create([
            'name' => 'juste',
            'email' => 'juste@uob.ga',
            'password' => Hash::make('juste')
        ]);

        $user2 = User::create([
            'name' => 'ghislaine',
            'email' => 'ghislaine@uob.ga',
            'password' => Hash::make('ghislaine')
        ]);

        $user3 = User::create([
            'name' => 'florient',
            'email' => 'florient@uob.ga',
            'password' => Hash::make('florient')
        ]);

        $user4 = User::create([
            'name' => 'johan',
            'email' => 'johan@uob.ga',
            'password' => Hash::make('johan')
        ]);

        $user5 = User::create([
            'name' => 'axel',
            'email' => 'axel@uob.ga',
            'password' => Hash::make('axel')
        ]);

        $user6 = User::create([
            'name' => 'emmanuel',
            'email' => 'emmanuel@uob.ga',
            'password' => Hash::make('emmanuel')
        ]);

        $userRole1 = Role::where('nom', 'Super-admin')->first();
        $userRole2 = Role::where('nom', 'Admin')->first();
        $userRole3 = Role::where('nom', 'Agent')->first();
        $userRole4 = Role::where('nom', 'Etudiant')->first();
        $userRole5 = Role::where('nom', 'Enseignant')->first();
        $userRole6 = Role::where('nom', 'Parent')->first();
        
        $user1->roles()->attach($userRole1);
        $user2->roles()->attach($userRole2);
        $user3->roles()->attach($userRole3);
        $user4->roles()->attach($userRole4);
        $user5->roles()->attach($userRole5);
        $user6->roles()->attach($userRole6);
    }
}
