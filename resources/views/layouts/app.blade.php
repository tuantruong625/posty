<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <title>Posty</title>
</head>
<body class="bg-gray-100">
 <nav class="bg-white p-6 flex justify-between mb-5">
  <ul class="flex items-center">
   <li class="px-2"><a href="{{ route('home') }}">Home</a></li>
   <li class="px-2"><a href="{{ route('dashboard') }}">Dashboard</a></li>
   <li class="px-2"><a href="{{ route('posts') }}">Post</a></li>
  </ul>

  <ul class="flex items-center">
   @auth
    <li class="px-2 capitalize"><a href="">{{ auth()->user()->username }}</a></li>
    <li class="px-2">
     <form action="{{ route('logout') }}" method="post"> 
      @csrf
      <button type="submit" class="p-3">Logout</button>
     </form>
    </li>
   @endauth

   @guest
    <li class="px-2"><a href="{{ route('login') }}">Login</a></li>
    <li class="px-2"><a href="{{ route('register') }}">Register</a></li>
   @endguest
  </ul>
 </nav>
 @yield('content')
</body>
</html>