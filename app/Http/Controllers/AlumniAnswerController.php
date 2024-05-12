<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AlumniAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = QuestionAnswer::with('user', 'user.alumni')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('count', function ($query) {
                    return $query->answer->count() . ' / ' . $query->question->count();
                })
                ->addColumn('action', 'questionanswer.include.action')
                ->toJson();
        }
        return view('questionanswer.index');
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
