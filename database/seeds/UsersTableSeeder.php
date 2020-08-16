<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\User;


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

        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $userRole = Role::where('name', 'user')->first();
        $blockedUserRole = Role::where('name', 'blocked_user')->first();

        $admin = User::create(
            [
                'name' => 'Akromjon Numonov',
                'email' => 'akyprog@gmail.com',
                'password' => Hash::make('@Akromjon@Numonov@')
            ]
        );
        $manager = User::create(
            [
                'name' => 'Manager User',
                'email' => 'richer_manager@gmail.com',
                'password' => Hash::make('@richer@manager@')
            ]
        );
        $teacher = User::create(
            [
                'name' => 'Teacher User',
                'email' => 'richer_teacher@gmail.com',
                'password' => Hash::make('@richer@teacher@')
            ]
        );
        $user = User::create(
            [
                'name' => 'User',
                'email' => 'richer_user@gmail.com',
                'password' => Hash::make('useruseruser')
            ]
        );
        $blockedUser = User::create(
            [
                'name' => 'Blocked User',
                'email' => 'richer_blocked_user@gmail.com',
                'password' => Hash::make('blockeduser')
            ]
        );
        
        $admin->roles()->attach($adminRole);   
        $teacher->roles()->attach($teacherRole); 
        $manager->roles()->attach($managerRole); 
        $user->roles()->attach($userRole); 
        $blockedUser->roles()->attach($blockedUserRole);  
    }
}
