<x-layout>

    <x-slot:heading>
        job
</x-slot:heading>

<h1>job id  page </h1>

<h2> {{  $job['title'] }}  </h2>

<p>this job pay around  {{ $job["salary"] }} </p>

</x-layout>