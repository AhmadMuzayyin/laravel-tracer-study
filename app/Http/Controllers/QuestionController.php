<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Question::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'question.include.action')
                ->toJson();
        }
        return view('question.index');
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
    public function store(QuestionRequest $request)
    {
        $validated = $request->validated();
        try {
            Question::create($validated);
            return redirect()->back()->withSuccess('Data created successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Erro for created data!');
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
        $question = Question::findOrFail($id);
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionRequest $request, string $id)
    {
        $validated = $request->validated();
        try {
            $question = Question::findOrFail($id);
            $question->update($validated);
            return redirect()->back()->withSuccess('Data hasbeen updated!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Error for updated data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $question = Question::findOrFail($id);
            $question->delete();
            return redirect()->back()->withSuccess('Data hasbeed deleted successfully!');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
