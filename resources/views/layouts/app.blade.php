<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Not Todo list')</title>
</head>

<body>
    <h1 style="text-align: center; margin-bottom: 1em;"> ကျွမ်းကျင် အချိန်ဆွဲသူများအတွက် Ashmoon ၏လုပ်ဆောင်ရန်စာရင်း </h1>
    <main style="margin-top: 2em; display: flex; justify-content: center; align-items: center;flex-direction: column;">
        @yield('content')
    </main>
</body>

</html>