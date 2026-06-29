@extends('layouts.app')

@section('title', 'အသစ်ထည့်ရန်')

@section('content')
    <h1>Todo အသစ်ထည့်မယ်</h1>
    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="ခေါင်းစဉ်" required> <br><br>
        <textarea name="description" placeholder="အသေးစိတ်"></textarea> <br><br>
        <button type="submit">သိမ်းမယ်</button>
    </form>
@endsection