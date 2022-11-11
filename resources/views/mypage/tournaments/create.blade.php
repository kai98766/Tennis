<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>大会結果入力</title>
    </head>
    <body>
        <h1>入力画面</h1>
        <form action="/tournaments" method="POST">
            @csrf
            <div class="title">
                <h2>name</h2>
                <input type="text" name="tournament[name]" placeholder="大会名"/>
                <p class="name__error" style="color:red">{{ $errors->first('tournament.name') }}</p>
            </div>
            <div class="result">
                <h3>result</h3>
                <textarea name="tournament[result]" placeholder="何回戦敗退またはベストいくつか"></textarea>
                <p class="result__error" style="color:red">{{ $errors->first('tournament.result') }}</p>
            </div>
            <div class="points">
                <h3>points</h3>
                <textarea name="tournament[points]" placeholder="取得ポイント"></textarea>
                <p class="points__error" style="color:red">{{ $errors->first('tournament.points') }}</p>
            </div>
            <input type="hidden" name=tournament[user_id] value={{Auth::user()->id}}>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>