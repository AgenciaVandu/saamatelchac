<div class="lead__modelo">
    <div class="container">
        <div class="lead__titulo">
            <h1>Bienvenido al modelo {{$modelo ?? 'Sin modelo'}}, tu nueva residencia</h1>
            <p>Déjanos tus datos y uno de nuestros asesores se comunicará contigo con más información.</p>
        </div>
        <div class="lead__form">


            <div class="regresar">
                <a href="{{ url()->previous() }}">Regresar</a>
            </div>
        </div>
    </div>
</div>
