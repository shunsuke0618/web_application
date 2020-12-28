<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Models\Program;

class ReviewsController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'user_id' => 'required',
            'program_id' => 'required|exists:programs,id',
            'ratings' => 'required', // 星が未評価の場合、6としているため必須項目
            'body' => 'required|max:2000'
        ]);
        $program = Program::findOrFail($params['program_id']);
        $program->reviews()->create($params);
        return redirect()->route('program.show', ['id' => $params['program_id']]);
    }
}
