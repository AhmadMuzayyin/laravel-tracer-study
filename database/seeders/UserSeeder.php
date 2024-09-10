<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'Nadia Fauzia',
            'Rina Kusuma',
            'Fahri Ramadhan',
            'Reza Maulana',
            'Isna Rahmawati',
            'Siti Rahmawati',
            'Rina Puspita',
            'Ayu Lestari',
            'Sari Handayani',
            'Adi Setiawan',
            'Andi Kurniawan',
            'Rini Handayani',
            'Budi Santoso',
            'Siti Rahayu',
            'Doni Prasetyo',
            'Toni Gunawan',
            'Nita Handayani',
            'Agung Saputra',
            'Desi Novita',
            'Rizki Pratama',
            'Lina Hartati',
            'Bayu Aji',
            'Yuli Rahmawati',
            'Dimas Prasetyo',
            'Putri Ayu',
            'Adi Wijaya',
            'Dika Nugraha',
            'Tia Kartika',
            'Endra Prasetyo',
            'Rina Wijayanti',
            'Dani Kurniawan',
            'Budi Hartono',
            'Eko Saputra',
            'Rini Agustina',
            'Nita Wulandari',
            'Andi Saputra',
            'Afif Hidayat',
        ];

        foreach ($users as $user) {
            $nameParts = explode(' ', $user, 2); // Pisahkan menjadi first name dan last name
            $firstName = $nameParts[0];
            $lastName = isset($nameParts[1]) ? $nameParts[1] : ''; // Jika tidak ada last name, kosongkan

            User::create([
                'name' => $firstName,
                'last_name' => $lastName,
                'email' => Str::lower($firstName . '.' . Str::lower($lastName)) . '@gmail.com',
                'password' => 'password', // Enkripsi password
            ]);
        }
    }
}
