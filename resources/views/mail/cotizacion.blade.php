<h1>¡Tu Cotización de Tiny House!</h1>

<p>¡Hola! {{$quote->name}}, estaremos más que felices de trabajar contigo. ¡Nuestro equipo de ventas te llamará pronto!</p>
<b>Gracias por confiar en nosotros.</b>

<h2>Resumen:</h2>
<b>Tu teléfono: </b> {{$quote->cell_phone}}
<b>Tu ubicación: </b> {{$quote->city}} {{$quote->neighborhood}}
<b>Hora preferida de contacto: </b> Fecha: {{$quote->scheduled->format('d-m-y') }} Hora: {{$quote->scheduled->format('H:i') }}
<h2>Tu Cotización:</h2>
<b>Modelo: </b> {{$quote->model}}
<textarea>
    {{htmlspecialchars($quote->description)}}
</textarea>
