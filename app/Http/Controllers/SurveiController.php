<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index()
    {
        $questions = Question::with('answer')->whereHas('answer', function ($q) {
            return $q;
        })->get();
        $answer = QuestionAnswer::where('user_id', auth()->id())->first();
        if (isset($answer) && $answer->count() > 0) {
            return redirect()->back()->with('error', 'Anda sudah mengisi survei');
        } else {
            return view('survei.survey', compact('questions'));
        }
    }
    public function store(Request $request)
    {
        $answers = $request->except('_token'); // Menghapus token CSRF dari array jawaban
        $questionIds = [];
        foreach ($answers as $key => $value) {
            // Ambil ID dari key, misalnya 'jawaban-1' menjadi 1
            if (preg_match('/^jawaban-(\d+)$/', $key, $matches)) {
                $questionIds[] = (int)$matches[1];
            }
        }
        try {
            $answer = Question::whereHas('answer')->whereIn('id', $questionIds)->get();
            $data = [];
            foreach ($answer as $key => $value) {
                $keyRequest = 'jawaban-' . $value->id;
                array_push($data, [
                    'user_id' => auth()->id(),
                    'question_id' => $value->id,
                    'answer_id' => Answer::where('question_id', $value->id)->where('jawaban', $request->$keyRequest)->first()->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            QuestionAnswer::insert($data);
            return redirect('home')->with('success', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }
}
