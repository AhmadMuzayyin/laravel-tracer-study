<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\RoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::create([
        //     'name' => 'Admin',
        //     'last_name' => 'SMKN 1 PROPPO',
        //     'email' => 'admin@admin.com',
        //     'email_verified_at' => now(),
        //     'password' => 'password',
        //     'remember_token' =>  \Illuminate\Support\Str::random(10),
        //     'role' => RoleEnum::Admin->value
        // ]);
        \App\Models\User::factory(50)->create();
        // $kuesioner = [
        //     'Apakah Anda bekerja saat ini?',
        //     'Apakah Anda berorganisasi ketika masih siswa ?',
        //     'Jika Tidak berorganisasi, mengapa?',
        //     'Setelah lulus SMKN 1 Proppo, apakah Anda bersekolah lagi ?',
        //     'Apa alasan utama Anda bersekolah lagi ?',
        //     'Kapan Anda mulai mencari pekerjaan ?',
        //     ' Apakah pendidikan yang Anda dapat di SMKN 1 PROPPO relevan dengan pekerjaan Anda ? ',
        //     'Dari pengalaman Anda bekerja, apa saran praktis Anda untuk pendidikan di SMKN 1 PROPPO dalam rangka meningkatkan kesesuaian antara pendidikan dengan lapangan pekerjaan ?',
        //     'Apakah Anda merasa bahwa pendidikan di SMKN 1 PROPPO cukup mempersiapkan Anda untuk bekerja ?',
        //     'Saat baru lulus, sejauh mana Anda merasa mampu bersaing dng lulusan sekolah lain ?',
        //     'Sejauh ini, menurut Anda lulusan SMKN 1 PROPPO yang bagaimana yg diperlukan oleh pasar/lapangan kerja ?',
        //     'Pengetahuan pada disiplin ilmu Anda ? ',
        //     'Pengetahuan diluar disiplin ilmu Anda ?',
        //     'Pengetahuan Umum ?',
        //     'Keterampilan Bahasa Inggris ?',
        //     'Keterampilan Komputer diluar pelajaran?',
        //     'Berpikir Kritis ?',
        //     'Kemampuan Berkomunikasi ?',
        //     'Analisa masalah ?',
        // ];
        // foreach ($kuesioner as $key => $value) {
        //     \App\Models\Question::create([
        //         'slug' => \Illuminate\Support\Str::slug($value),
        //         'name' => $value
        //     ]);
        // }
    }
}
