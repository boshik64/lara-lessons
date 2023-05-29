<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="nav nav-pills">
                <div class="spinner-grow text-info"></div>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.index')}}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts.index')}}">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.index')}}">About</a>
                </li>
            </ul>
        </div>

    </nav>
    @yield('content')


</div>
</body>
</html>
