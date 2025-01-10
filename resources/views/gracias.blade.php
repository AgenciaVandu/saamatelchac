@push('scss')
@vite(['resources/scss/gracias.scss', 'resources/scss/app.scss',   'resources/js/app.js'])

@endpush
<x-layouts.app>
   <section class="gracias">
    <div class="container">
        <div class="gracias__contenido">
            <img src="" class="img-fluid" alt="">
            <h1>Gracias por contactarnos</h1>
            <p>En breve, uno de nuestros asesores se comunicará contigo con más información.</p>
            <a href="{{ url()->previous() }}">Ir al inicio</a>
        </div>
    </div>
   </section>
</x-layouts.app>
