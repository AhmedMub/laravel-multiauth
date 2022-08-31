<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="">
      <h1>this is testing page for that is ment for admins only <strong>{{ Auth::user()->name }}</strong></h1>
    </div>
</x-app-layout>
