<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>アカウント情報登録</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
               (登録)
        </x-slot>
    <body>
    <form action="/accounts" method="POST">
        @csrf
        <div class="name">
            <h1>name</h1>
            <input type="text" name="user[name]" placeholder="フルネームで記入" value="{{old('user.name')}}"/>
            <p class="name__error" style="color:red">{{ $errors->first('user.name') }}</p>
        </div>
        <div class="sex">
            <h2>sex</h2>
            <textarea name="account[sex]" placeholder="男子か女子で記入">{{ old('account.sex') }}</textarea>
            <p class="sex__error" style="color:red">{{ $errors->first('account.sex') }}</p>
        </div>
        <div class='age'>
            <h2>age</h2>
            <textarea name="account[age]" placeholder="早生まれに注意">{{ old('account.age') }}</textarea>
            <p class="age__error" style="color:red">{{ $errors->first('account.age') }}</p>
        </div>
        <input type="hidden" name=account[user_id] value={{Auth::user()->id}}>
        <input type="submit" value="保存"/>
    </form>
    <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>