<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Premiers Secours') }}
    </h2>
  </x-slot>

  <section id="first-aid" class="pt-12">
    @for ($i = 0; $i < 10; $i++)
      <div class="flex items-center justify-center pb-4 mx-8 mt:mx-0">
        <div class="max-w-50 sm:flex">
          <div
            class="h-32 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('https://media.istockphoto.com/photos/man-placing-woman-in-recovery-position-after-accident-picture-id467047188?k=20&m=467047188&s=612x612&w=0&h=dp-C72mnkRTKpgeP8Gu1o2mA06ak9L5OrVQ1PfvLPT8=')"
            title="Woman holding a mug">
          </div>
          <div
            class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
              <p class="text-sm text-grey-dark flex items-center">
                Tamalou
              </p>
              <a href="{{ route('first-aid.pls') }}" class="text-black font-bold text-xl mb-2">Comment mettre en PLS ?</a>
              <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatibus
                quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
            </div>
            <div class="flex items-center">
              <img class="w-10 h-10 rounded-full mr-4"
                src="{{ asset('images/vico.jpg') }}"
                alt="Avatar of Jonathan Reinink">
              <div class="text-sm">
                <p class="text-black leading-none">Victor Jullien</p>
                <p class="text-grey-dark">Docteur TAMALOU</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    @endfor
  </section>
</x-app-layout>
