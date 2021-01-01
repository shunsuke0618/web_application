@extends('layouts.app')

@section('content')
<div class="container">
    投稿編集<br>
    <form action="{{ route('reviews.update') }}" method='post'>
        {{ csrf_field() }}
        <input type='hidden' name='id' value='{{ $review->id }}'><br>
        投稿内容：<input type='text' name='body' value='{{ $review->body }}'><br>
        <button type="submit" class="btn btn-primary">送信</button>
</div>
@endsection
