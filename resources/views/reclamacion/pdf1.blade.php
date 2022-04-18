<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta Garantia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">

    <style>
        body{
            font-size: 18px;
        }

    </style>
</head>
<body>
    <main class="container m-4 ">
        <div class="text-right">
            <img src="{{ public_path('img/logo6.jpg') }}" style="width:240px;">
        </div>
    <div class="row">
        <div class="col-11">
    <div class="fecha">
        <span class="mr-72">Medellín, {{ $reclamo->updated_at->isoFormat('LL') }}.</span>
    <span class="text-right ml-4" >{{ $reclamo->consecutivo_carta }}</span>
</div>
</div>
</div>
<br>
<div class="row">
<p class="mb-0">{{ $reclamo->comercial }}</p>
<p class="mb-0">{{ $reclamo->cliente }}</p>
<p class="mb-0">{{ $reclamo->ciudad }}</p>
</div>
<br>
<p class="mt-2">
Asunto: Respuesta a su solicitud de garantía de {{ $reclamo->cantidad }} {{ $reclamo->referencia }}.
</p>
<br>
<p class="text-justify">
Por medio de la presente informamos lo siguiente una vez realizada las diferentes pruebas técnicas al equipo relacionado en el asunto.
</p>
<br>
<p class="ps-3 mb-2">
-  {{ $reclamo->descripcion_revision }}
</p>

<p class="mb-2">En Conclusión:</p>
<p>
    Después de realizadas las pruebas se determina que {{ $reclamo->solucion  }} y {{$reclamo->observaciones }} con el  documento {{ $reclamo->num_documento }} como constancia de dicho proceso.
</p>


<p class="text-justify">
Agradecemos tener presente que Laumayer S.A concede garantía sobre los productos que comercializa por defectos de fabricación o defectos de material, máximo un año después de ser facturado. En nuestras marcas de iluminación aplica garantía de 3 años en VCP ECOLIGHTING.
</p>
<br><br><br><br>
<p>Andrés López Gómez </p>
<p class="mb-4">Analista de Soporte Técnico</p>
</main>

<footer class="mt-20 mx-1">
    <img src="{{ public_path('img/footer.jpg') }}">
</footer>
</body>
</html>
