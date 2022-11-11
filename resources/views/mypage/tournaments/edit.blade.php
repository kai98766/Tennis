<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>大会結果編集</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
        　    （編集）
        </x-slot>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/tournaments/{{ $tournament->id }}/edit" method="POST">
                @csrf
                @method('PUT')
                <div class='content__name'>
                    <h2>name</h2>
                    <input type='text' name='tournament[name]' value="{{ $tournament->name }}">
                </div>
                <div class='content__result'>
                    <h3>result</h3>
                    <input type='text' name='tournament[result]' value="{{ $tournament->result }}">
                <div class='content__points'>
                    <h3>points</h3>
                    <input type='text' name='tournament[points]' value="{{ $tournament->points }}">
                </div>
                <input type="hidden" name=tournament[id] value={{ $tournament->id }}>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
    </x-app-layout>
</html>