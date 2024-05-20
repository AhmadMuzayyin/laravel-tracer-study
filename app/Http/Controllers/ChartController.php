<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function alumni()
    {
        if (request()->ajax()) {
            $alumni_menjawab = QuestionAnswer::with('user', 'user.alumni')->select('user_id')->distinct()->get();
            $alumni = [
                'total' => User::where('role', 'alumni')->count(),
                'datasets' => [
                    $alumni_menjawab->count(),
                    User::where('role', 'alumni')->count() - $alumni_menjawab->count(),
                ],
            ];
            return response()->json($alumni);
        }
    }
    public function jk()
    {
        if (request()->ajax()) {
            $user_alumni = User::with('alumni')->get();
            if ($user_alumni->isNotEmpty()) {
                $lk = 0;
                $pr = 0;
                foreach ($user_alumni as $user) {
                    if ($user->alumni && $user->alumni->jenis_kelamin) {
                        if ($user->alumni->jenis_kelamin == 'Laki-Laki') {
                            $lk += 1;
                        }
                        if ($user->alumni->jenis_kelamin == 'Perempuan') {
                            $pr += 1;
                        }
                    }
                    $age = [
                        'lk' => $lk,
                        'pr' => $pr,
                    ];
                }
                return response()->json($age);
            }
        }
    }
    public function umur()
    {
        if (request()->ajax()) {
            $user_alumni = User::with('alumni')->get();
            if ($user_alumni->isNotEmpty()) {
                $dewasa = [];
                $remaja = [];
                foreach ($user_alumni as $user) {
                    if ($user->alumni && $user->alumni->tanggal_lahir) {
                        $birthdate = Carbon::parse($user->alumni->tanggal_lahir);
                        if ($birthdate->age >= 25) {
                            array_push($dewasa, $birthdate->age);
                        }
                        if ($birthdate->age >= 14 && $birthdate->age <= 24) {
                            array_push($remaja, $birthdate->age);
                        }
                        $age = [
                            'dewasa' => count($dewasa),
                            'remaja' => count($remaja),
                        ];
                    }
                }
                return response()->json($age);
            }
        }
    }
    public function jawaban()
    {
        $questions = Question::with(['answer' => function ($query) {
            $query->select('id', 'question_id', 'jawaban');
        }])->get();

        // Data untuk chart
        $chartData = [];

        foreach ($questions as $question) {
            $data = [
                'question' => $question->name,
                'answers' => []
            ];

            foreach ($question->answer as $answer) {
                // Hitung jumlah user yang memilih jawaban ini
                $count = QuestionAnswer::where('question_id', $question->id)
                    ->where('answer_id', $answer->id)
                    ->count();

                $data['answers'][] = [
                    'jawaban' => $answer->jawaban,
                    'count' => $count
                ];
            }

            $chartData[] = $data;
        }
        return response()->json($chartData);
        // if (request()->ajax()) {
        //     $pendapat =  DB::table('question_answers')
        //         ->join('answers', 'question_answers.answer_id', '=', 'answers.id')
        //         ->whereBetween('answers.jawaban', [1, 4])
        //         ->select('answers.jawaban', DB::raw('count(*) as count'))
        //         ->groupBy('answers.jawaban')
        //         ->get();
        //     return response()->json($pendapat);
        // }
    }
}
