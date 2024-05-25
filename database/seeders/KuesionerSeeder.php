<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\User;
use App\RoleEnum;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'Apakah Anda bekerja saat ini?',
                'answers' => [
                    'Ya',
                    'Tidak',
                    'Sedang mencari pekerjaan',
                    'Sedang melanjutkan pendidikan'
                ]
            ],
            [
                'question' => 'Berapa lama waktu yang Anda butuhkan untuk mendapatkan pekerjaan pertama setelah lulus?',
                'answers' => [
                    'Kurang dari 1 bulan',
                    '1-3 bulan',
                    '4-6 bulan',
                    'Lebih dari 6 bulan'
                ]
            ],
            [
                'question' => 'Apa jenis pekerjaan Anda saat ini?',
                'answers' => [
                    'Pekerjaan tetap',
                    'Pekerjaan kontrak',
                    'Pekerjaan paruh waktu',
                    'Wirausaha'
                ]
            ],
            [
                'question' => 'Apakah pekerjaan Anda saat ini sesuai dengan bidang studi yang Anda pelajari di SMKN 1 Proppo?',
                'answers' => [
                    'Sangat sesuai',
                    'Cukup sesuai',
                    'Kurang sesuai',
                    'Tidak sesuai sama sekali'
                ]
            ],
            [
                'question' => 'Bagaimana Anda menemukan pekerjaan Anda saat ini?',
                'answers' => [
                    'Melalui iklan lowongan kerja',
                    'Rekomendasi teman/keluarga',
                    'Job fair',
                    'Portal pencarian kerja online'
                ]
            ],
            [
                'question' => 'Apakah Anda merasa pendidikan di SMKN 1 Proppo mempersiapkan Anda dengan baik untuk pekerjaan Anda?',
                'answers' => [
                    'Sangat mempersiapkan',
                    'Cukup mempersiapkan',
                    'Kurang mempersiapkan',
                    'Tidak mempersiapkan sama sekali'
                ]
            ],
            [
                'question' => 'Apa tingkat pendapatan bulanan Anda saat ini?',
                'answers' => [
                    'Kurang dari Rp 2.000.000',
                    'Rp 2.000.000 - Rp 4.000.000',
                    'Rp 4.000.000 - Rp 6.000.000',
                    'Lebih dari Rp 6.000.000'
                ]
            ],
            [
                'question' => 'Apakah Anda pernah mengikuti pelatihan atau kursus tambahan setelah lulus dari SMKN 1 Proppo?',
                'answers' => [
                    'Ya, terkait bidang studi',
                    'Ya, tidak terkait bidang studi',
                    'Tidak, tetapi berencana',
                    'Tidak'
                ]
            ],
            [
                'question' => 'Seberapa sering Anda menggunakan keterampilan yang Anda pelajari di SMKN 1 Proppo dalam pekerjaan Anda?',
                'answers' => [
                    'Setiap hari',
                    'Beberapa kali seminggu',
                    'Beberapa kali sebulan',
                    'Jarang atau tidak pernah'
                ]
            ],
            [
                'question' => 'Bagaimana Anda menilai kualitas fasilitas dan infrastruktur di SMKN 1 Proppo?',
                'answers' => [
                    'Sangat baik',
                    'Baik',
                    'Cukup',
                    'Kurang'
                ]
            ],
            [
                'question' => 'Bagaimana Anda menilai kualitas pengajaran di SMKN 1 Proppo?',
                'answers' => [
                    'Sangat baik',
                    'Baik',
                    'Cukup',
                    'Kurang'
                ]
            ],
            [
                'question' => 'Apakah Anda melanjutkan pendidikan ke jenjang yang lebih tinggi setelah lulus dari SMKN 1 Proppo?',
                'answers' => [
                    'Ya',
                    'Tidak',
                    'Sedang berencana',
                    'Tidak, langsung bekerja'
                ]
            ],
            [
                'question' => 'Jika ya, di mana Anda melanjutkan pendidikan Anda?',
                'answers' => [
                    'Universitas',
                    'Politeknik',
                    'Akademi',
                    'Sekolah kejuruan lainnya'
                ]
            ],
            [
                'question' => 'Bagaimana Anda menilai relevansi kurikulum SMKN 1 Proppo dengan kebutuhan industri saat ini?',
                'answers' => [
                    'Sangat relevan',
                    'Cukup relevan',
                    'Kurang relevan',
                    'Tidak relevan sama sekali'
                ]
            ],
            [
                'question' => 'Apakah Anda merasa jaringan alumni SMKN 1 Proppo membantu dalam pengembangan karir Anda?',
                'answers' => [
                    'Sangat membantu',
                    'Membantu',
                    'Kurang membantu',
                    'Tidak membantu sama sekali'
                ]
            ],
            [
                'question' => 'Apakah Anda pernah menjalani magang selama di SMKN 1 Proppo?',
                'answers' => [
                    'Ya, di perusahaan besar',
                    'Ya, di perusahaan kecil',
                    'Ya, di lembaga pemerintah',
                    'Tidak pernah'
                ]
            ],
            [
                'question' => 'Bagaimana pengalaman magang Anda membantu dalam pekerjaan Anda saat ini?',
                'answers' => [
                    'Sangat membantu',
                    'Cukup membantu',
                    'Kurang membantu',
                    'Tidak membantu sama sekali'
                ]
            ],
            [
                'question' => 'Apakah Anda terlibat dalam organisasi atau kegiatan ekstrakurikuler selama di SMKN 1 Proppo?',
                'answers' => [
                    'Ya, aktif di organisasi',
                    'Ya, aktif di kegiatan ekstrakurikuler',
                    'Tidak terlalu aktif',
                    'Tidak terlibat sama sekali'
                ]
            ],
            [
                'question' => 'Bagaimana pengalaman tersebut mempengaruhi pengembangan keterampilan Anda?',
                'answers' => [
                    'Sangat positif',
                    'Cukup positif',
                    'Kurang positif',
                    'Tidak berpengaruh'
                ]
            ],
            [
                'question' => 'Apakah Anda memiliki saran atau masukan untuk perbaikan SMKN 1 Proppo di masa mendatang?',
                'answers' => [
                    'Lebih banyak pelatihan praktis',
                    'Peningkatan fasilitas',
                    'Peningkatan kualitas pengajaran',
                    'Program kerjasama dengan industri'
                ]
            ]
        ];
        $status = [
            'pertama', 'kedua', 'ketiga', 'keempat'
        ];
        $users = User::where('role', RoleEnum::Alumni->value)->get();
        foreach ($questions as $question) {
            $questionModel = Question::create([
                'slug' => Str::slug($question['question']),
                'name' => $question['question'],
            ]);
            $answers = [];
            foreach ($question['answers'] as $key => $answer) {
                $answerModel = Answer::create([
                    'question_id' => $questionModel->id,
                    'jawaban' => $answer,
                    'status' => $status[$key] // ini bisa disesuaikan atau di-random
                ]);

                $answers[] = $answerModel;
            }
            foreach ($users as $key => $user) {
                QuestionAnswer::create([
                    'user_id' => $user->id,
                    'question_id' => $questionModel->id,
                    'answer_id' => $answers[array_rand($answers)]->id // disini random id dari $questionModel->answer 
                ]);
            }
        }
    }
}
