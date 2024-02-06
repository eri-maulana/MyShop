<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>MyShop: Official Store</title>

   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
   @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/themes/myshop/main.css'])

</head>
<body>
   @include('themes.myshop.shared.header')
   @include('themes.myshop.shared.sidebar')
   @yield('content')
   @include('themes.myshop.shared.footer')
</body>
</html>