<x-pulse::card :cols="$cols" :rows="$rows" :class="$class">

    <x-pulse::card-header name="Outdated Composeer Dependencies">

        <x-slot:icon>
            <x-dynamic-component :component="'pulse::icons.sparkles'" />
        </x-slot:icon>
    
    </x-pulse::card-header>

    <x-pulse::scroll :expand="$expand" wire:poll.5s="">

        @if (!count($packages))

            <x-pulse::no-results />

        @else

            <div class="grid grid-cols-1 @lg:grid-cols-2 @3xl:grid-cols-3 @6xl:grid-cols-4 gap-2">

                <x-pulse::table>

                    <colgroup>

                        <col width="100%" />

                        <col width="0%" />

                        <col width="0%" />

                    </colgroup>

                    @foreach ($packages as $package)

                        <tr class="h-2 first:h-0"></tr>

                        <tr wire:key="{{ $package['name'] }}">

                            <x-pulse::td class="max-w-[1px]">
                                <code class="block text-xs text-gray-900 truncate dark:text-gray-100" title="">

                                    {{ $package['name'] }}

                                </code>

                                <p class="mt-1 text-xs text-gray-500 truncate dark:text-gray-400" title="">

                                    <a href="{{ $package['source'] }}" target="_blank">
                                        {{ str($package['source'])->after('://') }}
                                    </a>

                                </p>

                            </x-pulse::td>

                            <x-pulse::td numeric class="font-bold text-gray-700 dark:text-gray-300">
                                {{ $package['version'] }}
                            </x-pulse::td>

                            <x-pulse::td numeric class="font-bold text-gray-700 dark:text-gray-300">
                                {{ $package['latest'] }}
                            </x-pulse::td>

                        </tr>

                    @endforeach

                </x-pulse::table>
            
            </div>

        @endif
    
    </x-pulse::scroll>

</x-pulse::card>