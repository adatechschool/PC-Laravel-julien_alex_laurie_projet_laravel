<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <!-- https://newbedev.com/laravel-form-html-with-put-method-for-put-routes -->
  <!--<form method="PUT" target> -->
  <!-- 2eme piste =   -->
  <!--  <form class="col-md-12" action=" -->
  <!--https://laravel.com/docs/4.2/html#form-model-binding-->
  {{-- {{ Form::model($user, array('route' => array('user.edit', $user->id)))}} --}}

  <form method="PUT" action="/user/{{$user->id}}/">
    EDIT
    <!-- Name -->
    <div>
      <x-label for="name" :value="__('Name')" />
      <x-input id="name" class="block mt-1 w-full" type="name" name="name" value="{{ $user->name ?? '' }}" required />

    </div>

    <!-- Email Address -->
    <div>
      <x-label for="email" :value="__('Email')" />
      <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email ?? '' }}" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-label for="password" :value="__('Password')" />
      <x-input id="password" class="block mt-1 w-full" type="password" name="password" value="{{ $user->password ?? '' }}" required />
    </div>

    <!-- Biography -->
    <div>
      <x-label for="biography" :value="__('Biography')" />
      <x-input id="biography" class="block mt-1 w-full" type="biography" name="biography" value="{{ $user->biography ?? '' }}" required />
    </div>

    <div>
      <x-button class="ml-3" type="submit" value="edit">
        Valider
      </x-button>
    </div>

  </form>
</x-guest-layout>