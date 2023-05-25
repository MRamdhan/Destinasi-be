<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->role = 'admin';
        $user->password=  bcrypt('admin');
        $user->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@example.com';
        $user->role='user';
        $user->password = bcrypt('user');
        $user->save();

        $user = new Destination();
        $user->foto = 'img/ipul.jpg';
        $user->nama = 'Anfield';
        $user->alamat = 'Anfield Rd, Anfield, Liverpool L4 0TH, Inggris Raya';
        $user->link ='https://www.google.com/maps/place/Anfield/@53.4308365,-2.9633863,17z/data=!3m1!4b1!4m6!3m5!1s0x487b21654b02538b:0x84576a57e21973ff!8m2!3d53.4308333!4d-2.9608114!16zL20vMDE4N3py?hl=id';
        $user->deskripsi = 'Anfield adalah nama stadion yang terletak di kota Liverpool Inggris, yang memiliki kapasitas tempat duduk sebanyak 54,074, membuat stadion ini menjadi stadion terbesar ketujuh di Inggris';
    }
}
