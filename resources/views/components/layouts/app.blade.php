<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titleSaama ?? 'Saama telchac'}} - Saama Telchac </title>
    <meta name="description" content="{{$metaDescription ?? 'sin meta'}}">
    @stack('scss')
</head>
<body class="body">

    <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Llena los datos para descargar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pb-5">
            <div class="_form_3 pb-4"></div><script src="https://geyluk.activehosted.com/f/embed.php?id=3" charset="utf-8"></script>
        </div>

      </div>
    </div>
  </div>

   <div class="slider fixed-top">
    <div class="sponsor">
        <h5 class="text-center">50% de unidades vendidas - Entrega verano 2025 - Aparta con $20,000 pesos mexicanos</h5>
    </div>
    <div class="sponsor">
        <h5 class="text-center">50% de unidades vendidas - Entrega verano 2025 - Aparta con $20,000 pesos mexicanos</h5>
    </div>
    <div class="sponsor">
        <h5 class="text-center">50% de unidades vendidas - Entrega verano 2025 - Aparta con $20,000 pesos mexicanos</h5>
    </div>
   </div>
    <x-navbar/>


    {{$slot}}

    <x-footer/>

</body>
</html>
