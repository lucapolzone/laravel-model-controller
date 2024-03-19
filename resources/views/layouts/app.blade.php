<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>{{ env('APP_NAME', 'Laravel project') }} - @yield('title', 'My page')</title>

  @vite('resources/js/app.js')
  @yield('css')
</head>

<body>
  
 @include('partials.header')

 <main>
   @yield('main-content')
 </main>
 

 @include('partials.footer')

</body>
</html>