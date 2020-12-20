    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>トップページ</title>
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
                        <div class="col-xs-6">
                            <h1>これはトップページです</h1> 
                            <h2>これはラジオレビューサイトです。いろいろなラジオ番組を見つけて楽しむことができます。</h2>
                        </div>
                        <div class="col-xs-6">
                            <p class="top_button_1">   
                                <button type="button" class="btn btn-default btn-lg btn-block"><a href="/">番組を探す</a></button>
                            </p>
                            <p class="top_button_2"> 
                                <button type="button" class="btn btn-default btn-lg btn-block"><a href="/">レビュー投稿する</a></button>
                            </p>
                        </div>
                        </div>
                </div>
                <hr>
                <div class="container">
                    <h1 class="text-center">カテゴリーで探す</h1>
                        <div class="row">
                            <div class="col-xs">
                            <div class="category_1">
                                <div class="col-xs-2"><h3>エリア :</h3></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">北海道</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">東北</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">関東</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">中部</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">近畿</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">中国</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">四国</button></div>
                                <div class="col-xs-1"><button type="button" class="btn btn-default btn-lg">九州</button></div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs">
                            <div class="category_2">
                                <div class="col-xs-2"><h3>時間帯 :</h3></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">6:00~12:00</button></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">12:00~18:00</button></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">18:00~24:00</button></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">24:00~6:00</button></div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs">
                            <div class="category_3">
                                <div class="col-xs-2"><h3>ジャンル :</h3></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">お笑い</button></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">アイドル</button></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">音楽</button></div>
                                <div class="col-xs-2"><button type="button" class="btn btn-default btn-lg">ニュース</button></div>
                            </div>
                            </div>
                        </div>    
                </div>
                <hr>
            </main>
            @include("parts.footer") 
        </body>
    </html>
