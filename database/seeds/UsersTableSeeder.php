<?php

use App\Models\User;
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
        $dataSet = [
        [
            'name' => '山田太郎',
            'email' => 'yamada@mail.com',
            'password' => 'yamadayamada',   
        ],
        [
            'name' => '山田花子',
            'email' => 'hanako@mail.com',
            'password' => 'hanakohanako',
        ],   
        [
            'name' => '田中太郎',
            'email' => 'tanaka@mail.com',
            'password' => 'tanakatanaka',
        ],  
        [
            'name' => '田中二郎',
            'email' => 'jirou@mail.com',
            'password' => 'jiroujirou',
        ],  
    ];    
    foreach($dataSet as $data){
        User::create($data);
    }
    }
}
