<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

<div class="container-fluid mb-5" style="margin-bottom: 150px !important">
  <div class="row mr-4">
      @foreach ($responseBody as $response)

      <div class="col-xl-3 col-md-6 mb-4 hvr-grow ">
          <div class="card shadow  py-0 rounded-lg ">
              <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <a href="{{ $response->url }}" class="text-muted">
                              <div class=" font-weight-bold mb-2 mt-2 text-primary text-center text-uppercase mb-1">
                                  {{ Str::limit($response->title, 45) }}

                              </div>
                          </a>
                          <div class="h6 mb-0 text-gray-800 text-center">
                              {{ Str::limit($response->description, 100) }}
                          </div>
                      </div>
                  </div>
                  <div style="position: absolute; bottom: 0" class="mb-2">
                      <hi>Page Views: <strong>{{ number_format($response->page_views_count) }}</strong></hi>
                      <hi class="ml-3"> Reactions: <strong>{{ $response->positive_reactions_count }} </strong></hi>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>

<x-slot name="footer">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Dashboard') }}
  </h2>
</x-slot>
</x-app-layout>
