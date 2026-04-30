<nav {{ $attributes->class(['page-nav']) }} aria-labelledby="main-nav-id">
    <h2 class="hidden" id="main-nav-id">navigation principale</h2>
    <ul>
        <li><a class="active" href="{{ route('pages.home') }}">Accueil</a></li>
        <li><a class="" href="{{ route('attendances.index') }}">Présences</a>
        </li>
        <li><a class="" href="{{ route('students.index') }}">Étudiants</a></li>
        @auth
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <x-submit-button>{{ ucfirst(__('verbs.logout')) }}</x-submit-button>
                </form>
            </li>
        @endauth
    </ul>
</nav>
