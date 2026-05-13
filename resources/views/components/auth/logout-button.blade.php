<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn--secondary">
        <x-svg.logout />
        Me déconnecter
    </button>
</form>
