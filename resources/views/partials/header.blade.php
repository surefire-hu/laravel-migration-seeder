{{-- resources/views/partials/header.blade.php --}}
   <header>
       <nav class="bg-gray-800">
           <div class="container mx-auto flex justify-between items-center py-4">
               <a class="text-white text-lg" href="{{ route('departures.today') }}">TrainCompany</a>
               <div class="flex space-x-4">
                   <a class="text-white" href="{{ route('departures.today') }}">Departures Today</a>
                   <a class="text-white" href="{{ route('next.departures') }}">Next Departures</a>
               </div>
           </div>
       </nav>
   </header>