@extends('layouts.app')

@section('title', 'အသစ်ထည့်ရန်')

@section('content')
    <h1>Todo အသစ်ထည့်မယ်</h1>
    <form action="/tasks" method="POST">
        @csrf
        <input class="pad input" type="text" name="title" placeholder="ခေါင်းစဉ်" required> <br><br>
        <textarea class="pad text-area" name="description" placeholder="အသေးစိတ်" rows="8" cols="25"></textarea> <br><br>
        <button type="submit" class="btn pad">သိမ်းမယ်</button>
    </form>
        <a href="/tasks" style="margin-top: 10px;">ပင်မစာမျက်နှာသို့</a>

@endsection