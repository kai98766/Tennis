<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Players Mypage</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>目標ポイントは{{$goal}}です。</h1>
            <h1>現在のポイントは{{$points}}です。</h1>
            <h1>今後の意気込み{{$slogun}}</h1>
            <div class='posts'>
                <a href='/tournaments/create'>"大会結果入力"</a>
                <a href='/tournaments'>"大会結果一覧"</a>
                <a href='/targets/create'>"目標登録"</a>
                <a href='/accounts/create'>"アカウント情報登録"</a>
            </div>
        </body>
    </html>
</x-app-layout>