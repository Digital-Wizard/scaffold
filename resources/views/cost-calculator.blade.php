<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Cost Calculator') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="card-body">
            <livewire:calculator/>
        </div>
       
    </div>
</x-app-layout>