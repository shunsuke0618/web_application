@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/">トップページ</a></button>
                <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/program">番組一覧ページ</a></button>
                <button type="button" class="btn btn-secondary btn-lg btn-block">レビュー投稿ページ</button>
            </div>
        </div>
    </div>
</div>
@endsection
