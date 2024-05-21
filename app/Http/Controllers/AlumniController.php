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
            $data = User::with('alumni')->where('role', 'Alumni')->orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'alumni.include.action')
                ->toJson();
        }
        return view('alumni.index');
    }
    public function store(AlumniRequest $request)
    {
        $validated = $request->validated();
        try {
            User::create($validated);
            return redirect()->back()->withSuccess('Data berhasil disimpan!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Data gagal disimpan!');
        }
    }
    public function edit(User $alumni)
    {
        $alumni = $alumni->load('alumni');
        return view('alumni.edit', compact('alumni'));
    }
    public function update(AlumniRequest $request, User $alumni)
    {
        $validated = $request->validated();
        try {
            Alumni::where('user_id', $alumni->id)->update([
                'alamat' => $validated['alamat'],
                'tempat_lahir' => $validated['tempat_lahir'],
                'tanggal_lahir' => $validated['tanggal_lahir'],
                'tahun_lulus' => $validated['tahun_lulus'],
            ]);
            $alumni->update([
                'name' => $validated['name'],
                'last_name' => $validated['last_name'],
                // 'email' => $validated['email'],
            ]);
            return redirect()->back()->withSuccess('Data berhasil diubah!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors("Data gagal diubah!");
        }
    }
    public function destroy(User $alumni)
    {
        // dd($alumni);
        try {
            // $alumni = User::findOrFail($alumni->id);
            $alumni->delete();
            return redirect()->back()->withSuccess('Data berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors("Data gagal dihapus!");
        }
    }
}
