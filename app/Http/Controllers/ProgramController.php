<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $query = Program::query();
        $programs = $query->orderBy('id', 'asc')->paginate(10);
        return view('index')->with('programs', $programs);
    }
    public function show($id)
    {
        $program = Program::find($id);
        return view('show')->with('program', $program);
    }
}
