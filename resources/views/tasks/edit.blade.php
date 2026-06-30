@extends('layouts.app')

@section('title', 'ပြုပြင်ရန်')

@section('content')
    <h1>Todo ပြင်ဆင်မယ်</h1>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required style="padding: 10px;border-radius: 8px;"> <br><br>
        <textarea name="description" rows="10" cols="40" style="resize: none; border: 2px solid gray; padding: 10px;border-radius: 10px">{{ $task->description }}</textarea> <br><br>
        <label>
            <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
            ပြီးပြီလား?
        </label> <br><br>
        <button type="submit" style="padding: 6px; border-radius:6px ;" >သိမ်းမယ်</button>
    </form>
@endsection