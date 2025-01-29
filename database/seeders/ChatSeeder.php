<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
           'sender_id' => 1,
           'receive_id' => 2,
           'message' => 'Hello, how are you?'
        ]);

        Chat::create([
            'sender_id' => 2,
            'receive_id' => 1,
            'message' => 'I\'m fine, thank you. How are you?'
        ]);
    }
}
