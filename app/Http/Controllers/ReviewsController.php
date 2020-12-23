<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewsController extends Controller
{
    //バリデーション・登録データの整形
    public function review(Request $request){
        $result = false;
        $request->validate([
            'program_id' => [
                'required',
                'exists:products,id',
                function($attribute, $value, $fail) use($request){
                    // ログインしているかチェック
                    if(!auth()->check()){
                        $fail('レビューするにはログインしてください');
                        return;
                    }
                    // すでにレビューしているかチェック
                    $exists = \App\Models\Review::where('user_id', $request->user()->id)->where('program_id', $request->program_id)->exists();
                    if($exists){
                        $fail('すでにレビューは投稿済みです');
                        return;
                    }

                }
            ],
            'ratings' => 'required|integer|min:1|max:5',
            'reviews' => 'required'
        ]);
        $review = new \App\Models\Review();
        $review->program_id = $request->program_id;
        $review->user_id = $request->user()->id;
        $review->ratings = $request->ratings;
        $review->review = $request->review;
        $result = $review->save();
        return ['result' => $result];
    }    
}
