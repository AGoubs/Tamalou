<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Premiers Secours') }}
    </h2>
  </x-slot>

  <section id="first-aid" class="pt-12">
      <div class="flex items-center justify-center pb-4 mx-8 mt:mx-0">
        <div class="sm:flex">
          <div
            class="h-32 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('https://lecrabeinfo.net/app/uploads/2017/05/le-guide-ultime-pour-resoudre-les-erreurs-decran-bleu-bsod-sur-windows-591bf5c850982.jpg')"
            title="Woman holding a mug">
          </div>
          <div
            class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
              <p class="text-sm text-grey-dark flex items-center">
                Tamalou
              </p>
              <a href="{{ route('first-aid.pls') }}" class="text-black font-bold text-xl mb-2">Comment mettre en PLS ?</a>
              <p class="text-grey-darker text-base">Notre super docteur TAMALOU Victor JULLIEN vous montre comment réaliser une bonne PLS pour aider vos amis en soirée.</p>
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

      <div class="flex items-center justify-center pb-4 mx-8 mt:mx-0">
        <div class="sm:flex">
          <div
            class="h-32 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('https://static.yabiladi.com/files/accounts/albums/e21044a35159bee845154b33f857c001_thumb_565.jpg')"
            title="Woman holding a mug">
          </div>
          <div
            class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
              <p class="text-sm text-grey-dark flex items-center">
                Tamalou
              </p>
              <a href="{{ route('first-aid.etouffement') }}" class="text-black font-bold text-xl mb-2">Comment aider quelqu'un qui s'étouffe ?</a>
              <p class="text-grey-darker text-base">Lorsqu’une personne s’étouffe et ne peut plus respirer, le sauveteur doit agir rapidement pour libérer ses voies respiratoires.</p>
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
      <div class="flex items-center justify-center pb-4 mx-8 mt:mx-0">
        <div class="sm:flex">
          <div
            class="h-32 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('https://www.challenges.fr/assets/img/2019/12/08/cover-r4x3w1000-5df72d51afd0b-000-par1180228.jpg')"
            title="Woman holding a mug">
          </div>
          <div
            class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
              <p class="text-sm text-grey-dark flex items-center">
                Tamalou
              </p>
              <a href="{{ route('first-aid.pcr') }}" class="text-black font-bold text-xl mb-2">Comment réaliser un test PCR ?</a>
              <p class="text-grey-darker text-base">COMMENT SE DÉROULE UN TEST DE DÉPISTAGE RT-PCR ? EST-IL DOULOUREUX ? CLIQUEZ ICI POUR LE SAVOIR !!!!!!!!!!!</p>
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
  </section>
</x-app-layout>
