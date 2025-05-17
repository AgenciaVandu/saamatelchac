
<nav class="navbar navbar-expand-lg navbar-light bg-saama fixed-top mt-5">
   <div class="container">
    <a class="navbar-brand" href="/">
        <img src="{{asset('img/logos/saama-green.svg')}}" width="120" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#comunidad">Comunidad</a>
        </li>
        <li class="nav-item">
          <a href="/#amenidades" class="nav-link ">Amenidades</a>
        </li>
        <li class="nav-item">
            <a href="/#tipologias" class="nav-link ">Modelos</a>
          </li>
          <li  class="nav-item">
          <a href="/#ubicacion" class="nav-link ">Ubicación</a>
          </li>
          <li class="nav-item">
            <a href="/#contacto" class="nav-link ">Contacto</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link ">ES</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home.en') }}" class="nav-link ">EN</a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/people/SAAMA-Telchac/100085116297594/?sk=about_contact_and_basic_info" class="nav-link ">
                <img src="{{asset('img/fb.svg')}}" width="20" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/saamatelchac/" class="nav-link ">
                <img src="{{asset('img/ig.svg')}}" width="20" alt="">
            </a>
          </li>
      </ul>

    </div>
   </div>
  </nav>
