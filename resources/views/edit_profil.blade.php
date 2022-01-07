<x-app-layout class="mb-8">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo-big class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <h1>Mise à jour du profil</h1>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('users.update', ['user' => $user]) }}">
            {{ method_field('PUT') }}
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)"
                    required autofocus />
            </div>

            <!-- FirstName -->
            <div class="mt-4">
                <x-label for="first_name" :value="__('Prenom')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                    :value="old('first_name', $user->first_name)" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $user->email)" required />
            </div>

            <!-- Gender -->
            <div class="mt-4">
                <x-label for="gender" :value="__('Civilité')" />

                <select id="gender"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="gender" :value="old('gender', $user->gender)" required>
                    <option value="0">Homme</option>
                    <option value="1">Femme</option>
                    <option value="2">Autre</option>
                </select>
            </div>

            <!-- Pregnant -->
            <div class="mt-4 hidden" id="pregnantDiv">
                <x-label for="pregnant" :value="__('Etes vous enceinte?')" />

                <select id="pregnant"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="pregnant" :value="old('pregnant', $user->pregnent)" required>
                    <option value="0" selected>Non</option>
                    <option value="1">Oui</option>
                </select>
            </div>

            <!-- Born date -->
            <div class="mt-4">
                <x-label for="born_date" :value="__('Date de naissance')" />

                <x-input id="born_date" class="block mt-1 w-full" type="date" name="born_date"
                    :value="old('born_date', $user->born_date->toDateTime()->format('d/m/Y'))" required />
            </div>

            <!-- weight -->
            <div class="mt-4">
                <x-label for="weight" :value="__('Poid (en KG)')" />

                <x-input id="weight" class="block mt-1 w-full" type="number" name="weight"
                    :value="old('weight', $user->weight)" required max="999" />
            </div>

            <!-- height -->
            <div class="mt-4">
                <x-label for="height" :value="__('Taille (en CM)')" />

                <x-input id="height" class="block mt-1 w-full" type="number" name="height"
                    :value="old('height', $user->height)" required max="300" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Mettre à jour les informations') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</x-app-layout>

<script>
    //TODO deplacer ça
    const genderSelect = document.getElementById("gender");
    const pregnantDiv = document.getElementById("pregnantDiv");
    const pregnantSelect = document.getElementById("pregnant");

    genderSelect.addEventListener("change", () => {
        if (genderSelect.value == 1 || genderSelect.value == 2) {
            pregnantDiv.classList.remove("hidden");
        } else {
            if (!pregnantDiv.classList.contains("hidden")) {
                pregnantDiv.classList.add("hidden");
                pregnantSelect.selectedIndex = 0;
            }
        }
    });
</script>
