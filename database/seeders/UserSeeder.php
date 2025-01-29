<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name'       => 'Bekhruz Salimov',
           'email'      => 'bk@gmail.com',
           'password'   => '1111',
           'avatar'     => 'me.jpg',
        ]);

        User::create([
            'name'       => 'Karim Mirzayev',
            'email'      => 'km@gmail.com',
            'password'   => '1111',
            'avatar'     => 'me.jpg',
        ]);

        foreach (range(1,15) as $i){
            User::factory()->create();
        }
    }
}
