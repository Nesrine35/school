<x-guest-layout>
    <form method="POST" action="">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            @include('inputs.input', [
                                'class' => 'col',
                                'label' => 'password',
                                'name' => 'password',
                            ])
        </div>
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />

            <select class="form-select" aria-label="Default select example" name="role">
                <option selected>selectioner un role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="bigadmin">Big Admin</option>
              </select>

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

       

        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ml-4">
                {{ __('Ajouter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
