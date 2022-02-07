@extends('layouts.app')

@section('content')
  <h1 class="text-3xl text-green-500 mb-5">{{ $job->title }}</h1>
  <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
    <p class="text-md text-gray-800">{{$job->description}} </p>
    <span class="text-sm text-gray-600">{{number_format($job->price / 100,2,',',' ')}}€</span>
  </div>
  {{-- <p class="text-base text-gray-700 mb-4">
  {{ $job->description }}
  </p>
  <a href="" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md px-4 py-2 mt-3">Soumettre une proposition</a> --}}

  <section x-data="{open:false}">
    <a class="text-green-500" href="#" @click.prevent="open = !open">Cliquez ici pour soummetre un candidature</a>
  
  <form method="POST" action="{{route('proposals.store',$job)}}" x-show= "open" cloak >
    @csrf
    <textarea class="p-3 font-thin w-full max-w-md " name="content"></textarea>
    <button type="submit" class="block bg-green-700 text-white px-3 py-2 mt-3"> Soumettre ma lettre de motivation</button>
  </form>
</section>
  @endsection