<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
        //

        User::truncate();
        DB::table('role_user')->truncate();



       $admin=  User::create([
              'name' =>'admin',
              'email' => 'admin@gmail.com',
              'password' => Hash::make('password')
        ]);

      $auteur =  User::create([
            'name' =>'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password')
      ]);

   $utilisateur=   User::create([
        'name' =>'utilisateur',
        'email' => 'utilisateur@gmail.com',
        'password' => Hash::make('password')
  ]);

  $adminRole = Role::where('name','admin')->first();
  $auteurRole = Role::where('name','superadmin')->first();
  $utilisateurRole = Role::where('name','utilisateur')->first();


   $admin->roles()->attach($adminRole);
   $auteur->roles()->attach($auteurRole);
   $utilisateur->roles()->attach($utilisateurRole);

    }
}
