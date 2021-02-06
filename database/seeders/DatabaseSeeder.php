<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
          'cpf' => '111222333' ,
          'name' => 'João' ,
          'phone' => '11 98786578' ,
          'birth' => '1980-10-01' ,
          'gender' => 'M' ,
          'email' => 'joao@sistema.com' ,
          'password' => env('PASSWORD_HASH') ? bcrypt('1234') : '1234' ,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
