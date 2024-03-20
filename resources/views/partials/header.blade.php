<header>
  <div class="container d-flex">
    <h4>Questo è l'header</h4>
    <ul class="d-flex">
      <li>
        <a @class (['link','active' => Route::currentRouteName() == 'home']) href="{{ route('home') }}">HOME</a>
      </li>
      <li>
        <a @class (['link','active' => Route::currentRouteName() == 'contacts']) href="{{ route('contacts') }}">CONTACTS</a>

      </li>
      <li>
        <a href="">Link</a>
      </li>
      <li>
        <a href="">Link</a>
      </li>
    </ul>
  </div>
</header>