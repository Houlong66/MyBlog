<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Houlong',
          'email' => '515491847@qq.com',
          'password' => bcrypt('726636'),
      ]);
    }
}
