<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel BBS</title>
</head>
<body>
    <header>
        <div><a href="{{ url('') }}">Laravel BBS</a></div>
    </header>
    <section>
        @yield('content')
    </section>
</body>
</html>
