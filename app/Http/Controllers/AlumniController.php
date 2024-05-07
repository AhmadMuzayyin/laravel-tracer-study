<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumniRequest;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = User::with('alumni')->orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'alumni.include.action')
                ->toJson();
        }
        return view('alumni.index');
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
    public function store(AlumniRequest $request)
    {
        $validated = $request->validated();
        try {
            $user = User::create([
                'name' => $validated['name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'password' => 'password',
            ]);
            Alumni::create([
                'user_id' => $user->id,
                'alamat' => $validated['alamat'],
                'telepon' => $validated['telepon'],
                'tempat_lahir' => $validated['tempat_lahir'],
                'tanggal_lahir' => $validated['tanggal_lahir'],
                'tahun_lulus' => $validated['tahun_lulus'],
            ]);
            return redirect()->back()->withSuccess('Data created successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Error for created data!');
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
        $alumni = User::where('id', $id)->with('alumni')->first();
        return view('alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlumniRequest $request, string $id)
    {
        $validated = $request->validated();
        try {
            $user = User::findOrFail($id);
            Alumni::where('user_id', $id)->update([
                'alamat' => $validated['alamat'],
                'tempat_lahir' => $validated['tempat_lahir'],
                'tanggal_lahir' => $validated['tanggal_lahir'],
                'tahun_lulus' => $validated['tahun_lulus'],
            ]);
            $user->update([
                'name' => $validated['name'],
                'last_name' => $validated['last_name'],
                // 'email' => $validated['email'],
            ]);
            return redirect()->back()->withSuccess('Data hasbeen updated!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors("Can't update data!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $alumni = User::findOrFail($id);
            $alumni->delete();
            return redirect()->back()->withSuccess('Data hasbeen deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors("Can't deleted data!");
        }
    }
}
