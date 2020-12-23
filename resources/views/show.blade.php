<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>番組一覧</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/style.css" />
        </head> 
        <body>
            @include("parts.header")
            <hr>
            <main>
                <div class="container">
                    <h1>詳細表示</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/program" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <tr><td>番組名</td><td>{{$program->title}}</tr>
                        <tr><td>放送時間</td><td>{{$program->timerange}}</tr>
                        <tr><td>番組内容</td><td>{{$program->content}}</tr>
                    </table>
                    <div class="container mt-4">
                            @foreach($program->reviews as $review)
                                <div class="card">
                                    <div class="card-header">{{ $review->user->name }}</div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $review->body }}</p>
                                    </div>
                                </div>
                            @endforeach
                    </div>
            </main>
            <hr>
        </body>
    </html>
    