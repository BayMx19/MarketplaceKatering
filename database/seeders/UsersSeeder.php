<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "KateringKu",
           'email' => "kateringku@gmail.com",
           'alamat' => "Jalan Surabaya No 111",
           'kontak' => "082191927762",
           'deskripsi' => "KateringKu menjual olahan seafood untuk kebutuhan perusahaan anda",
           'jenis_makanan' => "Seafood",
           'role' => "Merchant",
           'password' => Hash::make('KateringKu123'),
           'status' => "active",
        ]);
        DB::table('users')->insert([
            'name' => "Perusahaan A",
           'email' => "a@gmail.com",
           'alamat' => "Jalan Surabaya No 112",
           'kontak' => "082161691616",
           'deskripsi' => "",
           'jenis_makanan' => "",
           'role' => "Customer",
           'password' => Hash::make('PerusahaanA123'),
           'status' => "active",
        ]);
    }
}