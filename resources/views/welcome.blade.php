<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    body,html {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
</style>
</head>


<body>

<nav style="background-color: #BA64E8;" class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-family: 'Yuji Mai', serif;">MemiiToOn</a>
        <ul class="navbar-nav">
            @if (Route::has('login'))

            @auth
            <li class="nav-item">
                <a href="{{ url('/titles') }}" class="nav-link ">Mypage</a>
            </li>
            @else
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link ">Log in</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link ">Register</a>
            </li>
            @endif
            @endauth

            @endif
        </ul>
    </div>
</nav>
<div class="container" >
    

<h1 
style="
font-size: 100px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 80px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 60px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 40px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 20px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 10px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 5px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 5px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 10px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 20px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 40px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 60px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 80px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>
<h1 
style="
font-size: 100px; 
font-family: 'Yuji Mai', serif; 
color: purple; 
text-align: center;

">MemiiToOn</h1>


</div>
</body>

</html>