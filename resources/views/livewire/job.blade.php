<div>
    <div class="px-3 py-5 mb-3  shadow-sm hover:shadow-md rounded border-2 border-gray-300">
        <div class="flex justify-between">
            <h2 class="text-xl font-bold text-green-800">{{$job->title}}</h2>
            <button class="h-5 w-5 text-gray-500 focus:outline-none" wire:click="addLike">
                @if ($job->isLiked())
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24" stroke="green">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                @else
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                @endif
            </button>
        </div>
        <p class="text-md text-gray-800">{{$job->description}}</p>
        <div class="flex items-center">
            <span class="h-2 w-2 bg-green-300 rounded-full mr-1 mt-1"></span>
            <a href="{{route('jobs.show',$job->id)}}"> Consulter la mission</a>
        </div>
        <span class="text-sm text-gray-600">{{number_format($job->price/100,2,',',' ')}}$ </span>
    </div>
</div>
