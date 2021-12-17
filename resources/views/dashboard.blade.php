<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <section id="hero">
    <div class="relative bg-white overflow-hidden">
      <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
            fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>

          <div>
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
              <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">

                  </div>
                </div>
              </nav>
            </div>

            <main class="mt-4 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
              <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                  <span class="block xl:inline">Le premier chatbot</span>
                  <span class="block text-indigo-600 xl:inline">Médical</span>
                </h1>
                <p
                  class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Le premier chatbot de diagnostique médical à porté de main. Tester le dès maintenant en cliquant sur "Démonstration"
                </p>
                <div class="mt-6 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="{{ route('dashboard') }}"
                      class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                      Découvrir
                    </a>
                  </div>
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#"
                      class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                      Démonstration
                    </a>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
        <div class="lg:absolute hidden lg:block lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
            src="{{ asset('images/hero.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </section>

  <div tabindex="0" aria-label="footer" class="focus:outline-none border-b border-gray-200 dark:border-gray-700">

  <section id="features">
    </div>
    <div class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Découvrir</h2>
          <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            Obtenir un premier diagnostique rapide
          </p>
          <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
            L'application Tamalou vous permet d'obtenir un premier diagnostique rapide en fonction de vos symptômes.
          </p>
        </div>

        <div class="mt-10">
          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/globe-alt -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                  </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Bientôt multi-language</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Tamalou à pour ambition d'être accessible par tous le monde sans contraintes.
              </dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/scale -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Un diagnostique personnalisé</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Tamalou IA permet d'obtenir un diagnostique adapté en fonction de vos symptômes.
              </dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Echanges instantanées</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Notre Chatbot répond sans délais à vos questions afin d'éviter toutes pertes de temps.
              </dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/annotation -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                  </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Notifications</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
               Le Chatbot peut vous avertir à l'aide de notification une fois le diagnostique obtenu.
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <div tabindex="0" aria-label="footer" class="focus:outline-none border-t border-gray-200 dark:border-gray-700">

  <section class="bg-white body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Notre équipe</h1>
      </div>
      <div class="flex flex-wrap -m-2">
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="{{ asset('images/steven.jpg') }}">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Steven Borne</h2>
              <p class="text-gray-500">Product Owner</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="{{ asset('images/yohan.jpg') }}">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Yohan Britti</h2>
              <p class="text-gray-500">Chômeur</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="{{ asset('images/antoine.jpg') }}">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Antoine Lalardie</h2>
              <p class="text-gray-500">Cyber-sécurité</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="{{ asset('images/arnaud.jpg') }}">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Arnaud Goubier</h2>
              <p class="text-gray-500">Développeur Front-End</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="{{ asset('images/alex.jpg') }}">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Alexandre Monschein</h2>
              <p class="text-gray-500">Ingénieur IA</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="{{ asset('images/maxime.jpg') }}">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Maxime Belle</h2>
              <p class="text-gray-500">Développeur Back-End</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <x-slot name="footer">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
</x-app-layout>
