<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Tournament result</title>
    </head>
    <body>
        <div class='tournament'>
            @foreach ($tournaments as $tournament)
                <div class='tournament'>
                    <h1 class='title'>{{ $tournament->name }}</h1>
                    <p class='result'>
                        {{ $tournament->result }}
                    </p>
                    <p class='points'>
                        {{ $tournament->points }}
                    </p>
                    <a href='/tournaments/{{ $tournament->id }}/edit'>"結果変更"</a>
                    <form action="/tournaments/{{ $tournament->id }}" id="form_{{ $tournament->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $tournament->id }})">削除</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元出来ません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>