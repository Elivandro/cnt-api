<x-app-layout>

    <x-pulse>

        <livewire:pulse.servers cols="full" />

        <livewire:pulse.composer-outdated cols="4" rows="3" />

        <livewire:pulse.slow-queries cols="8" />

        <livewire:pulse.slow-requests cols="4" />

        <livewire:pulse.cache cols="4" />

        <livewire:pulse.exceptions cols="8" />

        <livewire:pulse.slow-outgoing-requests cols="full" />

    </x-pulse>

</x-app-layout>