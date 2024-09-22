@section('title')
    &vert; {{ __('app.history') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        {{ __('app.history') }}
    </x-slot>

    <div class="w-full py-5 space-y-5 overflow-x-auto">
        <livewire:people.heading :person="$person" />

        <div class="flex flex-wrap gap-5">
            <div class="min-w-100 md:max-w-max flex flex-col flex-grow gap-5">
                <livewire:people.profile :person="$person" />
            </div>

            <div class="min-w-100 md:max-w-max flex flex-col flex-grow gap-5">
                <livewire:people.family :person="$person" />
                <livewire:people.partners :person="$person" />
                <livewire:people.children :person="$person" />
                <livewire:people.siblings :person="$person" />
            </div>

            <div class="min-w-100 md:max-w-max flex flex-col flex-grow gap-5 overflow-x-auto">
                <livewire:people.history :person="$person" />
            </div>
        </div>
    </div>
</x-app-layout>
