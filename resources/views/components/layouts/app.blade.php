<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16593748225"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16593748225');
</script>
@stack('medicion')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titleSaama ?? 'Saama telchac'}} - Saama Telchac </title>
    <meta name="description" content="{{$metaDescription ?? 'sin meta'}}">
    @stack('scss')
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1157262415235968');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1157262415235968&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
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
