<h1>Todo ပြင်ဆင်မယ်</h1>
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $task->title }}" required> <br><br>
    <textarea name="description">{{ $task->description }}</textarea> <br><br>
    <label>
        <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
        ပြီးပြီလား?
    </label> <br><br>
    <button type="submit">သိမ်းမယ်</button>
</form>