<x-layout>
  <x-slot:heading>
      Job 
  </x-slot:heading>
  <ul>
   <h2 class="font-bold text-large">{{ $job['title'] }}</h2>

   <p>
    This job pays {{ $job['salary']}} per year.
   </p>
  </ul>
</x-layout>