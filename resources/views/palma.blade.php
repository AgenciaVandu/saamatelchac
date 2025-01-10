@push('scss')
@vite(['resources/scss/lead.scss', 'resources/scss/app.scss',   'resources/js/app.js'])

@endpush
<x-layouts.app>
    <x-lead>
        <x-slot name="modelo">
            Aqua

        </x-slot>
    </x-lead>

</x-layouts.app>
