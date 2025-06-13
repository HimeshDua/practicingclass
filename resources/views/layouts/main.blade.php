<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hello') - Practing Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
<header>
    @include("components.navbar")
</header>

<main>
    @yield("content")
</main>

<footer>

    </footer>
</body> 