@push('scss')
@vite(['resources/scss/lead.scss', 'resources/scss/app.scss',   'resources/js/app.js'])

@endpush
<x-layouts.app titleSaama="Departamento Garden, lujo con vista al mar" meta-description="Departamento de 3 recámaras con vista al mar, perfecto para vivir o disfrutar de unas vacaciones inolvidables. Situado en una de las playas más exclusivas y seguras de la costa yucateca, este desarrollo te permite experimentar diariamente la serenidad y los privilegios de estar a pasos del mar.">
    <x-lead>
        <x-slot name="modelo">
            Garden
        </x-slot>
    </x-lead>

</x-layouts.app>
