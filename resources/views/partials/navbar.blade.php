    <header class="flex justify-between items-center py-5">
        <div>LOGO</div>
        <nav>
            <livewire:search/>
            <a class="mr-5 hover:text-green-500" href="{{route('jobs.index')}}">Nos missions</a>
            @guest
            <a class="mr-5 hover:text-green-500" href="{{route('login')}}">Se connecter</a>
            <a class="mr-5 hover:text-green-500" href="{{route('register')}}">S'enregitrer</a>
            @else
            <a class="mr-5 hover:text-green-500" href="{{route('conversations.index')}}">Mes Conversations</a>
            <a class="mr-5 hover:text-green-500" href="{{route('home')}}">Tableau de bord</a>
            <a class=" hover:text-green-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            @endguest
        </nav>
    </header>