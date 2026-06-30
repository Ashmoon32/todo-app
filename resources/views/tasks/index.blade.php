@extends('layouts.app')

@section('title', 'ပင်မစာမျက်နှာ')

@section('content')
        <p><a href="/tasks/create">လုပ်ဆောင်ချက် အသစ်ထည့်ရန်</a></p>

        <p style="font-size: 1.2rem; color: #2c2828;
      text-shadow: 0 0 10px #1a3e44, 0 0 20px #3b89c1;">လုပ်ဆောင်ရန် တာဝန်များ</p>
        <ul>
            @foreach ($tasks as $task)
                <li style="display: flex; align-items: center;">
                        <a href="/tasks/{{ $task->id }}"><span style="margin-right: 10px">{{ $task->title }}</span></a>         
                        <a href="/tasks/{{ $task->id }}/edit" style="margin: 0 10px ">
                        <button class="btn">ပြင်မည်</button>
                        </a>  |  
                        <form action="/tasks/{{ $task->id }}" method="POST" style="margin: 0 10px">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">ဖျက်မည်</button>
                        </form>                  
                    @if ($task->is_completed) 
                        ပြီးမြောက်သည်✅ 
                    @else 
                        မပြီးမြောက်သေးပါ❌ 
                    @endif
                </li> 
            @endforeach
        </ul>

@endsection
