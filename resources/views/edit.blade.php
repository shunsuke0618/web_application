@extends('layouts.app')

@section('content')
<div class="container">
 投稿編集<br>
 <form action="{{ route('reviews.update') }}" method='post'>
    {{ csrf_field() }}
        投稿内容：<input type='text' value=""><br>
        <button type="submit" class="btn btn-primary">送信</button>
       
</div>
@endsection