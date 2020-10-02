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
        $users = [
            ['name' => 'Administrador','email' => 'admin@admin.com','tipo'=>'Administrador','status' => 'Ativo',  'password' => bcrypt('123123')],
            ['name' => 'THIAGO PEREIRA DOS SANTOS','email' => 'tthiagopereira7@gmail.com','tipo'=>'Administrador','status' => 'Ativo','password' => bcrypt('123123')],
            ['name' => 'KETHLEN DOS SANTOS SOUSA','email' => 'ketlhen@gmail.com','tipo'=>'Comandante','status' => 'Ativo','password' => bcrypt('123123')],
            ['name' => 'ADRIANO HENRIQUE DE SOUSA NEGÃO','email' => 'adriano@gmail.com','tipo'=>'Recrutador','status' => 'Ativo','password' => bcrypt('123123')],
            ['name' => 'ROBERTO DOS SANTOS','email' => 'roberto@gmail.com','tipo'=>'Cadastrador','status' => 'Ativo','password' => bcrypt('123123')],
        ];
        
        DB::table('users')->insert($users);
    
    }
}
