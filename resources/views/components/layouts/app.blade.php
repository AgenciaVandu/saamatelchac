<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saama Telchac</title>
    @vite(['resources/scss/index.scss', 'resources/scss/app.scss',   'resources/js/app.js'])
</head>
<body class="body">
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
