  <header class="site-header">
      <div class="container site-header__inner">

          <div class="site-header__identity">
              <span class="site-header__title">{{ config('app.name') }}</span>
              <span class="site-header__subtitle">Bienvenue, {{ auth()->user()?->name }}</span>
          </div>

          <div class="site-header__actions" aria-label="Actions utilisateur">
              <x-auth.logout-button />
          </div>

      </div>
  </header>
