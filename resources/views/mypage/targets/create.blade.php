<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>目標登録</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
               (登録)
        </x-slot>
    <body>
    <form action="/targets" method="POST">
        @csrf
        <div class="goal">
            <h1>point</h1>
            <input type="text" name="target[point]" placeholder="目標ポイント" value="{{old('target.point')}}"/>
            <p class="point__error" style="color:red">{{ $errors->first('target.point') }}</p>
        </div>
        <div class="slogun">
            <h2>slogun</h2>
            <textarea name="target[slogun]" placeholder="今後の意気込みや意識すること">{{ old('target.slogun') }}</textarea>
            <p class="slogun__error" style="color:red">{{ $errors->first('target.slogun') }}</p>
        </div>
        <input type="hidden" name=target[user_id] value={{Auth::user()->id}}>
        <input type="submit" value="保存"/>
    </form>
    <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>