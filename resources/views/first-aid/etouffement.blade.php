<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Premiers Secours') }}
    </h2>
  </x-slot>
  <div class="flex items-center justify-center py-8">
    <div class=" rounded overflow-hidden border w-full lg:w-8/12 md:w-10/12 bg-white mx-3 md:mx-0 lg:mx-0">
      <div class="w-full flex justify-between p-3">
        <div class="flex">
          <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/vico.jpg') }}" alt="profilepic">
          </div>
          <span class="pt-1 ml-2 font-bold text-sm">Victor Jullien</span>
        </div>
        <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
      </div>
      <video controls  class="w-full bg-cover">
        <source src="{{ asset('videos/Etouffement.mp4') }}"
                type="video/mp4">
    
        Sorry, your browser doesn't support embedded videos.
    </video>
     
      <div class="px-3 pb-2">
        <div class="pt-2">
          <i class="far fa-heart cursor-pointer"></i>
          <span class="text-sm text-gray-400 font-medium">12 j'aimes</span>
        </div>
        <div class="pt-1">
          <div class="mb-2 text-sm">
            <span class="font-medium mr-2">Victor Jullien</span> Voici une vidéo explicative sauver la vie de quelqu'un qui s'étouffe
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
