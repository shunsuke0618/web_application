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
            'password' => bcrypt('yamadayamada'),   
        ],
        [
            'name' => '山田花子',
            'email' => 'hanako@mail.com',
            'password' => bcrypt('hanakohanako'),
        ],   
        [
            'name' => '田中太郎',
            'email' => 'tanaka@mail.com',
            'password' => bcrypt('tanakatanaka'),
        ],  
        [
            'name' => '田中二郎',
            'email' => 'jirou@mail.com',
            'password' => bcrypt('jiroujirou'),
        ],  
    ];    
    foreach($dataSet as $data){
        User::create($data);
    }
    }
}
