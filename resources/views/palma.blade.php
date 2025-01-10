@push('scss')
@vite(['resources/scss/lead.scss', 'resources/scss/app.scss',   'resources/js/app.js'])

@endpush
<x-layouts.app>
    <x-lead>
        <x-slot name="modelo">
            Palmagi

        </x-slot>
    </x-lead>

</x-layouts.app>
