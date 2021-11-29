<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <form method="POST">

    <!-- Name -->
    <div>
      <x-label for="name" :value="__('Name')" />
      <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" placeholder="{{ $user->name ?? '' }}" required />
      
    </div>

    <!-- Email Address -->
    <div>
      <x-label for="email" :value="__('Email')" />

      <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
      {{ $user->email ?? '' }}
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-label for="password" :value="__('Password')" />

      <x-input id="password" class="block mt-1 w-full"
        type="password"
        name="password"
        required autocomplete="current-password" />
        {{ $user->password ?? '' }}
    </div>

    <!-- Biography -->
    <div>
      <x-label for="biography" :value="__('Biography')" />

        <x-input id="Biography" class="block mt-1 w-full" type="Biography" name="Biography" :value="old('Biography')" required />
        {{ $user->biography ?? '' }}
    </div>

    <div>
      <x-button class="ml-3">
        validation 
      </x-button>
    </div>
    
  </form>
</x-guest-layout>