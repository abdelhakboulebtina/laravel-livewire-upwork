<div class="inline-block relative"  x-data="{ open: true }">
    <input @click.away="open = false; @this.resetIndex();" @click.prevent="open=true" class="bg-gray-200 text-gray-700 w-56 border-2 focus:outline-none placeholder-gray-500 px-2 py-1 rounded-full mr-3" 
    placeholder="Rechercher un mission"
     wire:keydown.arrow-down.prevent="incrementIndex" 
     wire:keydown.arrow-up.prevent="decrementIndex" 
     wire:keydown.backspace="resetIndex" 
     wire:keydown.enter.prevent="showJob" 
     wire:model="query"  />
<svg class="w-5 h-5 text-gray-500 absolute top-0 right-0 mr-5 mt-2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
</svg>

   
    @if (strlen($query)>2 )
    <div  class="absolute border rounded bg-gray-100 text-md w-56 mt-1"
    x-show="open">
        @if(count($jobs)>0)
        @foreach ($jobs as $index =>$job)
            <p class="p-1 {{ $index===$selectedIndex ?'text-green-500' : ''}}">{{$job->title}}</p>
        @endforeach
    @else

    <span class=" text-orange-500 p-1">
        0 résultas pour *{{$query}}*
    </span>
    @endif
</div>
@endif
</div>
