<form action="/logout" method="POST">
    @csrf
    <button type="submit" class="btn btn--secondary">
        <x-svg.logout />
        {{ ucfirst(__('forms.labels-logout')) }}
    </button>
</form>
