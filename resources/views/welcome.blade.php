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
    </section>
  </main>
</body>

</html>
<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
