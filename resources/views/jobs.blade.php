<x-layout>

    <x-slot:heading>
        jobs
</x-slot:heading>

<h1>jobs page </h1>

<ul>
    @foreach ($jobs as $job )

    <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline" >
<li>{{ $job["title"] }} payed :{{ $job["salary"] }}</li>
    
    </a>

@endforeach 
</ul>

</x-layout>