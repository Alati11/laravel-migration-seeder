<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Migration</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
  <header>
      <nav>
          <li>
              <a href="">Travel</a>
          </li>
          <li>
            <a href="">About</a>
         </li>
        <li>
            <a href="">Contact</a>
        </li>
      </nav>
  </header>

  <main>
        @yield('content')
  </main>


  <footer>
      App by Giuseppe Alati
  </footer>
</body>
</html>