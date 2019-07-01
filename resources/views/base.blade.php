<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <ul>
        <li><a href="/projects">Our projects</a></li>
        <li><a href="/create">Create project</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/contacts">Contacts</a></li>
    </ul>
</body>
</html>