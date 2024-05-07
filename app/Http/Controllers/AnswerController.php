<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Question::with('answer')->orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'answer.include.action')
                ->toJson();
        }
        $question = Question::all()->toArray();
        return view('answer.index', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnswerRequest $request)
    {
        $validated = $request->validated();
        try {
            Answer::create($validated);
            return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'Data gagal disimpan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $answer = Answer::findOrFail($id);
        $question = Question::all()->toArray();
        return view('answer.edit', compact('answer', 'question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnswerRequest $request, string $id)
    {
        $validated = $request->validated();
        try {
            Answer::findOrFail($id)->update($validated);
            return redirect()->back()->with(['success' => 'Data berhasil diubah']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'Data gagal diubah']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Answer::destroy($id);
            return redirect()->back()->with(['success' => 'Data berhasil dihapus']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'Data gagal dihapus']);
        }
    }
}
