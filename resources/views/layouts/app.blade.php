<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('page-title')</title>
</head>

<body class="bg-gray-100">
       @include('partials.header')
       <main class="container mx-auto py-4">
           <div class="py-4">
               @yield('departure_trains')
           </div>
           <div class="py-4">
               <div class="row">
                   @yield('next_departures')
               </div>
           </div>
           <div class="py-4">
               <div class="row">
                   @yield('details')
               </div>
           </div>
       </main>
       @include('partials.footer')
   </body>

</html>