<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<ul>
    <a href="/new"><li style ="font-size:22px">Админка</li></a>
    <a href="/news"><li style ="font-size:22px">Новости</li></a>
</ul>
<hr>
@yield('menu')
</body>
</html>
