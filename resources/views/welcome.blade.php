<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <title>TODO</title>
</head>

<body>
  @extends('layout.navbar')
  <main>
    <!--=============== HOME ===============-->
    <section class="container section" id="home">
      <h2 class="section__title">Home</h2>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </section>
  </main>
</body>

</html>
<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
