@extends('layouts.app')

@section('title', 'အသေးစိတ်ကြည့်ရန်')

@section('content')
    <h3 style="color: rgb(143, 135, 135)">အသေးစိတ်များ</h3>
    <p style="font-weight: bolder; font-size: 1.5rem; color: #2c4957;">{{ $task->title }}</p>
    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(28, 38, 56);">{{ $task->description }}</p>
    @if ($task->is_completed)
        ပြီးမြောက်သည်✅
    @else
        မပြီးမြောက်သေးပါ❌
    @endif
    <a href="/tasks" style="margin-top: 1rem;">ပင်မစာမျက်နှာသို့⬅️</a>
@endsection